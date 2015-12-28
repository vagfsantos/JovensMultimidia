module.exports = function(grunt){

	grunt.initConfig({

		watch: {
		  src: {
		    files: ['css/**/*.scss'],
		    tasks: ['sass'],
		    options: {
		      spawn: false,
		    },
		  },
		},

		// compilar SASS
		sass: {
			dist:{
				files: { 'css/main.css':'css/sass/main.scss' }
			}
		}

	});


	grunt.loadNpmTasks("grunt-contrib-sass");
	grunt.loadNpmTasks("grunt-contrib-watch");

	grunt.registerTask('default', ['watch']);
}