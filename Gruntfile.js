module.exports = function(grunt){

	grunt.initConfig({

		clean: {
		  	target: {
		    	src: ['build']
		  	}
		},

		sass: {
			target:{
				files: { 
					'build/css/main.css' : '_src/css/scss/main.scss'
				}
			}
		},

		uglify: {
		    target: {
		      	files: [{
		          	expand: true,
		          	cwd: '_src/js',
		          	src: '*.js',
		          	dest: 'build/js',
		          	ext: '.min.js'
		      	}]
		    }
		},

		concat: {
		    missing: {
		      	src: ['_src/js/modules/**/*.js'],
		      	dest: '_src/js/main.js'
		    }
		},

		cssmin: {
			target: {
                files: {
                    'build/css/main.min.css' : 'build/css/main.css'
                }
			}
		},

		image: {
			dynamic: {
		        files: [{
		          	expand: true,
		          	cwd: '_src/img',
		          	src: ['**/*.{png,jpg,gif,svg}'],
		          	dest: 'build/img'
		        }]
			}
		},
        
        postcss: {
          options: {
            map: true,
            processors: [
              require('autoprefixer')({browsers: ['last 2 version']})
            ]
          },
          dist: {
            src: 'build/css/*.css'
          }
        },
        
//        svg_sprite: {
//            target: {
//                expand: true,
//                cwd: '_src/img/sprite',
//                src: ['**/*.svg'],
//                dest: '_src/css/scss/base/sprite',
//                
//                commonName: 'sprite',
//                hasMixin: true,
//                sprite: '../img/sprite/sprite.svg',
//                example: 'build/_src/img/sprite/sprite.svg',
//                
//                options:{
//                    shape: {
//                        dimension: {
//                            maxWidth: '30px'
//                        },
//                        
//                        spacing: {
//                            padding: 10
//                        },
//                        
//                        dest: 'intermediate'
//                    },
//                    
//                    mode: {
//                        view: {
//                            bust: false,
//                            render: {
//                                scss: true
//                            }
//                        },
//                        
//                        symbol: true
//                    }
//                }
//            }
//        },

		watch: {
			js:{
				files: ['_src/js/**/*.js'],
			    tasks: ['concat', 'uglify'],
			    options: {
					event: ['added', 'changed', 'deleted']
				}
			},

			css:{
				files: ['_src/css/scss/**/*.scss'],
			    tasks: ['sass', 'cssmin', 'postcss'],
			    options: {
					event: ['added', 'changed', 'deleted']
				}
			},

			img:{
				files: ['_src/img/**/*.{png,jpg,gif,svg}'],
			    tasks: ['image'],
			    options: {
					event: ['added', 'changed', 'deleted']
				}
			}
		}

	});


	grunt.loadNpmTasks("grunt-contrib-sass");
	grunt.loadNpmTasks("grunt-image");
	grunt.loadNpmTasks("grunt-contrib-clean");
	grunt.loadNpmTasks("grunt-contrib-concat");
	grunt.loadNpmTasks("grunt-contrib-copy");
	grunt.loadNpmTasks("grunt-contrib-cssmin");
	grunt.loadNpmTasks("grunt-contrib-uglify");
    grunt.loadNpmTasks('grunt-postcss');
	grunt.loadNpmTasks("grunt-contrib-watch");

	grunt.registerTask('default', ['clean', 'image', 'sass', 'cssmin', 'postcss', 'concat', 'uglify', 'watch']);
}