module.exports = function(grunt){

	grunt.initConfig({
		// compilar SASS
		sass: {
			dist:{
				files: { 'css/main.css':'css/sass/main.scss' }
			}
		}

	});


	grunt.loadNpmTasks("grunt-contrib-sass");

	grunt.registerTask('compilar', ['sass']);

}