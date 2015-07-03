
module.exports = function (grunt){
	grunt.initConfig({
		grunt.loadNpmTasks ('grunt-contrib-watch');
		grunt.loadNpmTasks( 'grunt-browser-sync' );
		browserSync: { dev: { bsFiles: { src : 'css/style.css' }, options: { proxy: "perfumeria:8888" } } }
	});
}