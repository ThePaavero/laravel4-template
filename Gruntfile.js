module.exports = function(grunt) {

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		banner: '/*! <%= pkg.name %>\n <%= grunt.template.today("yyyy-mm-dd") %>\n Author:<%= pkg.author %>\n License: <%= pkg.license %>\n*/\n',
		uglify: {
			'options': {
			},
			'minify-custom-scripts': {
				files: {
					'public/assets/js/autoloads.min.js': ['public/assets/js/main.js', 'public/assets/js/autoload/**/*.js']
				}
			}
		},
		sass: {
			dist: {
				files: {
				'public/assets/css/laravel4.css': ['public/assets/scss/laravel4.scss']
				}
			}
		},
		cssmin: {
			combine: {
			files: {
				'public/assets/css/laravel4.min.css': ['public/assets/css/laravel4.css']
			}
			}
		},
		watch: {
			css: {
				files: 'public/assets/scss/**/*.scss',
				tasks: ['sass', 'cssmin']
			},
			js: {
				files: ['public/assets/js/autoload/**/*.js'],
				tasks : ['uglify']
			},
			options: {
				livereload: false
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-watch');

	grunt.registerTask('default', ['uglify', 'sass', 'cssmin', 'watch']);
};