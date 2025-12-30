const { default: DataTables } = require("datatables.net");

module.exports = {
	output: 'public/assets',
	entry: {
		switzer: [
			{
				src: [
					'src/vendors/switzer/fonts',
					'src/vendors/icomoon/fonts',
				],
				dist: '/vendors/fonts',
			},
		],
		datatables: [
			{
				src: [
					'node_modules/datatables.net/js/dataTables.min.js',
				],
				dist: '/vendors/datatables.js',
				bundle: true,
			},
			{
				src: [
					'node_modules/datatables.net-dt/css/dataTables.dataTables.min.css',
				],
				dist: '/vendors/datatables.css',
				bundle: true,
			}
		],
		sortablejs: [
			{
				src: [
					'node_modules/sortablejs/Sortable.min.js',
				],
				dist: '/vendors/sortablejs.js',
				bundle: true,
			}
		],
		intlTelInput: [
			{
				src: [
				'node_modules/intl-tel-input/build/css/intlTelInput.css'
				],
				dist: '/vendors/intl-tel-input/css/intlTelInput.css',
				bundle: true,
			},
			{
				src: [
				'node_modules/intl-tel-input/build/js/intlTelInput.min.js'
				],
				dist: '/vendors/intl-tel-input/js/intlTelInput.js',
				bundle: true,
			},
			{
				src: [
				'node_modules/intl-tel-input/build/js/utils.js'
				],
				dist: '/vendors/intl-tel-input/js/utils.js',
				bundle: false,
			},
			{
				src: [
				'node_modules/intl-tel-input/build/img/flags.png',
				'node_modules/intl-tel-input/build/img/flags.webp',
				'node_modules/intl-tel-input/build/img/flags@2x.png',
				'node_modules/intl-tel-input/build/img/flags@2x.webp',
				],
				dist: '/vendors/intl-tel-input/img',
			}
		],
		plugins: [
			{
				src: [
					'src/vendors/fontawesome/webfonts',
				],
				dist: 'webfonts',
			},
			{
				src: [
					'src/images',
				],
				dist: 'images',
			},
			{
				src: [
					'node_modules/jquery/dist/jquery.min.js',
					'node_modules/@keenthemes/ktui/dist/ktui.min.js',
					'node_modules/sweetalert2/dist/sweetalert2.all.min.js',
					'node_modules/daterangepicker/daterangepicker.js',
					'node_modules/daterangepicker/moment.min.js',
					'node_modules/jquery-validation/dist/jquery.validate.min.js',
					'node_modules/jquery-validation/dist/additional-methods.min.js',
					'node_modules/select2/dist/js/select2.min.js',
					'src/vendors/custom.js',
				],
				dist: '/vendors/plugins.js',
				bundle: true,
			},
			{
				src: [
					'src/vendors/fontawesome/css/all.min.css',
					'node_modules/daterangepicker/daterangepicker.css',
					'node_modules/sweetalert2/dist/sweetalert2.min.css',
					'node_modules/swiper/swiper-bundle.css',
					'node_modules/nouislider/distribute/nouislider.css',
					'node_modules/croppie/croppie.css',
					'node_modules/select2/dist/css/select2.min.css',
					'src/vendors/switzer/fonts.css',
					'src/vendors/icomoon/style.css'
				],
				dist: '/vendors/plugins.css',
				bundle: true,
			}
		],
		website: [
			{
				src: [
					'src/images/web',
				],
				dist: 'images/web',
			},
			{
				src: [
					'src/vendors/web/animation.js',
					'src/vendors/web/core.js',
				],
				dist: '/vendors/website.js',
				bundle: true,
			},
		],
	},
};
