module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        banner: '/*! <%= pkg.name %>\n <%= grunt.template.today("yyyy-mm-dd") %>\n Author:<%= pkg.author %>\n License: <%= pkg.license %>\n*/\n',
        jshint: {
            all: ['Gruntfile.js', 'assets/js/**/*.js']
        },
        uglify: {
            options: {
                banner: '<%= banner %>'
            },
            build: {
                src: 'assets/js/project.js',
                dest: 'public/assets/js/project.min.js'
            }
        },
        sass: {
            dist: {
              files: {
                'assets/css/project.css': 'assets/scss/project.scss'
              }
            }
        },
        cssmin: {
          combine: {
            files: {
              'public/assets/css/project.min.css': ['assets/css/project.css']
            }
          }
        },
        watch: {
            scripts: {
                files: 'assets/js/**/*.js',
                tasks: ['uglify']
            },
            css: {
                files: 'assets/scss/**/*.scss',
                tasks: ['uglify', 'sass', 'cssmin']
            },
            html: {
                files: 'public/index.html',
                tasks: []
            },
            options: {
                livereload: true
            }
        }
    });

    // Load the plugin that provides the "uglify" task.
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // Default task(s).
    grunt.registerTask('default', ['jshint','uglify', 'sass', 'cssmin', 'watch']);
};