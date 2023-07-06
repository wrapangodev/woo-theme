/**
 * Gulp file
 *
 * @package cozynest
 */

'use strict';

let theme       = 'cozynest',
	site_name   = 'cozynest',
	theme_ver   = '1.0.0',
	gulp        = require( 'gulp' ),
	zip         = require( 'gulp-zip' ),
	autoLoad    = require( 'gulp-load-plugins' )(),
	del         = require( 'del' ),
	wpPot       = require( 'gulp-wp-pot' ),
	browserSync = require( 'browser-sync' ).create(),
	runSequence = require( 'run-sequence' ),
	sass        = require( 'gulp-sass' )( require( 'node-sass' ) ),
	sourcemaps  = require( 'gulp-sourcemaps' ),
	globbing    = require( 'gulp-css-globbing' ),
	concat      = require( 'gulp-concat' ),
	uglify      = require( 'gulp-uglify-es' ).default,
	rename      = require( 'gulp-rename' ),
	vinylBuffer = require( 'vinyl-buffer' ),
	debug       = require( 'gulp-debug' );

// Sass `compressed` `expanded` `compact` `nested`.
let _sass = ( done ) => {
	gulp.src( 'style.scss' )
		.pipe(
			globbing(
				{
					extensions: [ '.scss' ]
				}
			)
		).pipe( sourcemaps.init() )
		.pipe(
			sass(
				{
					outputStyle: 'expanded'
				}
			).on(
				'error',
				sass.logError
			)
		).pipe( sourcemaps.write( '.' ) )
		.pipe( gulp.dest( '.' ) )
		.pipe( browserSync.stream() );

	done();
}

// Sass admin.
let _sassAdmin = ( done ) => {
	gulp.src( ['assets/css/admin/**/*.scss', '!assets/css/admin/**/*.css'] )
		.pipe(
			globbing(
				{
					extensions: [ '.scss' ]
				}
			)
		).pipe(
			sass(
				{
					outputStyle: 'expanded'
				}
			).on(
				'error',
				sass.logError
			)
		).pipe( gulp.dest( 'assets/css/admin' ) );

	done();
}

// Sass rtl.
let _sassRtl = ( done ) => {
	gulp.src( 'style-rtl.scss' )
		.pipe(
			globbing(
				{
					extensions: [ '.scss' ]
				}
			)
		).pipe(
			sass(
				{
					outputStyle: 'expanded'
				}
			).on(
				'error',
				sass.logError
			)
		).pipe( gulp.dest( '.' ) );

	done();
}

// Handle console.
let handleError = function( e ) {
	console.log( e.toString() );
	this.emit( 'end' );
}

// Broswer sync task.
let _browserSync = ( done ) => {
	browserSync.init(
		{
			proxy: 'http://' + site_name + '.io'
		}
	);
	done();
}

// Create .post file.
let _pot = ( done ) => {
	gulp.src( '**/*.php' )
		.pipe(
			wpPot(
				{
					domain: theme,
					package: 'Cozynest'
				}
			)
		).on(
			'error',
			handleError
		).pipe( gulp.dest( 'languages/' + theme + '.pot' ) );

	done();
}
gulp.task( 'pot', _pot );

// Min js file.
let _minJs = ( done ) => {
	gulp.src( [ 'assets/js/**/*.js', '!assets/js/**/*.min.js'] )
		.pipe( rename( { suffix: '.min' } ) )
		.on( 'error', err => { console.log( err ) } )
		.pipe( uglify() )
		.pipe( gulp.dest( 'assets/js' ) );

	done();
}

// Zip task.
let _zip = ( done ) => {
	gulp.src(
		[
			'**/*',
			'!./{node_modules,node_modules/**/*}',
			'!./*.cache',
			'!./*.log',
			'!./*.xml',
			'!./*.lock',
			'!./*.md',
			'!./*.zip',
			'!./*.map',
			'!./**/*.scss',
			'!./{assets/css/sass,assets/css/sass/**/*}',
			'!./{assets/css/rtl,assets/css/rtl/**/*}',
			'!./assets/css/admin/**/*.scss}',
			'!./Gulpfile.js',
			'!./package-lock.json',
			'!./package.json',
			'!./sftp-config.json'
		]
	)
	/*.pipe( debug( { title: 'src' } ) )*/
	.pipe( zip( theme + '.zip' ) )
	.pipe( gulp.dest( '.' ) );

	done();
}
gulp.task( 'zip', gulp.series( _pot, _zip ) );

// Watch task.
let _watch = ( done ) => {
	gulp.watch( ['assets/css/sass/*.scss', 'style.scss' ], _sass );
	gulp.watch( ['assets/css/rtl/*.scss', 'style-rtl.scss' ], _sassRtl );
	gulp.watch( ['assets/css/admin/**/*.scss', '!assets/css/admin/**/*.css'], _sassAdmin );
	gulp.watch( ['assets/js/**/*.js', '!assets/js/**/*.min.js'], _minJs );

	done();
}

// Clean.
let clean = () => del( null );

// Default task.
gulp.task( 'default', gulp.parallel( _watch, _browserSync ) );
