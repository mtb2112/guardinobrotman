module.exports = function( grunt ) {
	'use strict';

	var pathCSS = '/' ,
		pathLESS = 'assets/less/';

	// Load all grunt tasks
	require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

	// Project configuration
	grunt.initConfig({
		pkg:    grunt.file.readJSON( 'package.json' ),
		concat: {
			options: {
				stripBanners: true,
				banner: '/*! <%= pkg.title %> - v<%= pkg.version %> - <%= grunt.template.today("yyyy-mm-dd") %>\n' +
					' * <%= pkg.homepage %>\n' +
					' * Copyright (c) <%= grunt.template.today("yyyy") %>;' +
					' * Licensed GPLv2+' +
					' */\n'
			},
			guardino_brotman_wedding: {
				src: [
					'assets/js/src/guardino_brotman_wedding.js'
				],
				dest: 'assets/js/guardino_brotman_wedding.js'
			}
		},
		jshint: {
			browser: {
				all: [
					'assets/js/src/**/*.js',
					'assets/js/test/**/*.js'
				],
				options: {
					jshintrc: '.jshintrc'
				}
			},
			grunt: {
				all: [
					'Gruntfile.js'
				],
				options: {
					jshintrc: '.gruntjshintrc'
				}
			}   
		},
		uglify: {
			all: {
				files: {
					'assets/js/guardino_brotman_wedding.min.js': ['assets/js/guardino_brotman_wedding.js']
				},
				options: {
					banner: '/*! <%= pkg.title %> - v<%= pkg.version %> - <%= grunt.template.today("yyyy-mm-dd") %>\n' +
						' * <%= pkg.homepage %>\n' +
						' * Copyright (c) <%= grunt.template.today("yyyy") %>;' +
						' * Licensed GPLv2+' +
						' */\n',
					mangle: {
						except: ['jQuery']
					}
				}
			}
		},
		test:   {
			files: ['assets/js/test/**/*.js']
		},
		
		cssmin: {
			options: {
				banner: '/*! <%= pkg.title %> - v<%= pkg.version %> - <%= grunt.template.today("yyyy-mm-dd") %>\n' +
					' * <%= pkg.homepage %>\n' +
					' * Copyright (c) <%= grunt.template.today("yyyy") %>;' +
					' * Licensed GPLv2+' +
					' */\n'
			},
			minify: {
				expand: true,
				
				cwd: 'assets/css/',
				src: ['guardino_brotman_wedding.css'],
				
				dest: 'assets/css/',
				ext: '.min.css'
			}
		},

		less: {
			dev: {
				options: {
					path: pathCSS,
					cleancss: true
				},
				files: {
					'style.css' : 'assets/less/style.less'
				}
			},
			prod: {
				options: {
					path: pathLESS,
					compress: true,
					cleancss: true
				}
			}
		},

		watch:  {
			dev: {
				files: pathLESS + '*',
				options: {
					reload: true,
					livereload: false
				},
				tasks: [ 'less:dev' ]
			},
			configFiles: {
				files: ['Gruntfile.js'],
				options: {
					reload: true
				}
			}
		},

		bowercopy: {
	        options: {
	            destPrefix: pathLESS
	        },
	        files: {
	            src: [ 
	            	'semantic-grid/stylesheets/less/grid.less', 
	            	'normalize-less/normalize.less', 
	            	'less-mixins/mixins.less' 
	            	]
	        }
	    },

	    imagemin: {
	    	png: {
	    		options: {
	    			optimizationLevel: 7
	    		},
	    		files: [{
	    			expand: true,
	    			cwd: 'images',
	    			src: ['**/*.png'],
	    			dest: 'images',
	    			ext: '.png'
	    		}]
	    	}
	    },

	    sprite: {
            dist: {
                src: ['images/src/png/*.png'],
                destImg: 'images/sprite.png',
                destCSS: 'assets/less/_sprite.less',
                cssFormat: 'less',
                imgPath: 'images/sprite.png',
                algorithm: 'diagonal',
                padding: 40
            }
        }
	});

	// Default task.
	
	grunt.registerTask( 'default', ['watch:dev'] );
	grunt.registerTask('icons', ['clean', 'svgmin', 'grunticon']);
	grunt.registerTask('pngconv', ['svg2png']);
	grunt.registerTask('pngmin', ['imagemin:png']);
	grunt.registerTask('spritesheet', ['sprite']);
	

	grunt.util.linefeed = '\n';

};