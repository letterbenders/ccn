module.exports = function(grunt){
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		concat: {
			dist: {
		        src: ['bootstrap/assets/javascripts/bootstrap.js', 'js/modules/*.js'],
		        dest: 'js/build.js',
		      } //dist
		}, //concat

		uglify: {
			options: {
		      banner: '/*! <%= pkg.name %> - v<%= pkg.version %> - ' +
		        '<%= grunt.template.today("yyyy-mm-dd") %> */'
		    },
		    dist: {
		    	files: {
		          'assets/js/build.min.js': ['js/build.js']
		        }
		    } // dist
		},
		
		compass: {
			dist: {
				options: {
					sassDir: 'sass',
					cssDir: 'assets/css',
					outputStyle: 'compressed'
				}
			}
		},

		imagemin: {                          // Task
   			dynamic: {                         // Another target
		    	files: [{
		        	expand: true,                  // Enable dynamic expansion
		        	cwd: 'assets/img',             // Src matches are relative to this path
		        	src: ['**/*.{png,jpg,gif}'],   // Actual patterns to match
		        	dest: 'assets/img'                  // Destination path prefix
		      	}] // files
		    } // dynamic
		  
		}, //imagemin
		copy: {
		  main: {
		    src:  ['assets/css/build.css', 'assets/js/build.min.js', 'assets/img/**/*', 'assets/fonts/**/*', 'modules/**/*', '*.php'],
		    dest: 'build/',
		  },
		},

		watch: {
			options: {
			    livereload: true,
    		},
    		joinjs: {
    			files: ['bootstrap/assets/javascripts/bootstrap.js', 'js/modules/*.js'],
				tasks: ['concat']
			}, 
    		scripts: {
    			files: ['js/build.js'],
				tasks: ['uglify']
			}, //scripts
			html: {
				files: ['*.html']
			}, // html
			php: {
				files: ['**/*.php']
			}, // php
			css: {
				files: ['**/*.scss', '**/*.css'],
				tasks: ['compass']
			}, //css
			images: {
				files: ['assets/img/**/*.{png,jpg,gif}'],
				tasks: ['imagemin']
			} //imagemin
		} //watch
	}) //initConfig

	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-compass');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-imagemin');
	grunt.loadNpmTasks('grunt-contrib-copy');

	grunt.registerTask('default', ['watch']);
	grunt.registerTask('build', ['copy']);
	
} //exports