// C3 Chart 1
var chart1 = c3.generate({
	bindto: '#lineGraph',
	padding: {
		top: 10,
		left: 30,
	},		
	data: {
		columns: [
			['data1', 14, 28, 31, 49, 57, 59, 52, 48, 55, 58, 62, 60, 62, 58, 55, 61, 70, 80, 77, 78, 82, 98, 99, 121, 136, 115, 112, 120, 103, 117, 121, 126],
			['data2', 3, 16, 19, 24, 27, 32, 38, 36, 32, 36, 40, 48, 41, 44, 46, 53, 58, 62, 65, 61, 64, 62, 59, 63, 87, 92, 72, 81, 75, 80, 97, 97],
		],
		names: {
			data1: 'onGoing',
			data2: 'Completed'
		},
		colors: {
			data1: '#cbac7b',
			data2: '#ff5661'
		},
	}
});