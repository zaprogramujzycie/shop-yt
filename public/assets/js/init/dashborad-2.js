"use strict";
$(document).ready(function(){

    /* -----  Morris - Updating Chart ----- */
	function morrisUpdating() {
		var nReloads = 0;
		function data(offset) {
		  var ret = [];
		  for (var x = 0; x <= 360; x += 10) {
			var v = (offset + x) % 360;
			ret.push({
			  x: x,
			  y: Math.sin(Math.PI * v / 180).toFixed(4),
			  z: Math.cos(Math.PI * v / 180).toFixed(4)
			});
		  }
		  return ret;
		}
		var xpMorrisUpdating = Morris.Line({
			element: 'xp-morris-updating',
			data: data(0),
			xkey: 'x',
			ykeys: ['y', 'z'],
			labels: ['Series A', 'Series B'],
			parseTime: false,
			ymin: -1.0,
			ymax: 1.0,
			hideHover: true,
			lineColors: ['#4c7cf3', '#2bcd72'],
			gridLineColor: '#e1e4e9',
			resize: true
		});
		function update() {
		  nReloads++;
		  xpMorrisUpdating.setData(data(5 * nReloads));
		  $('#reloadStatus').text(nReloads + ' reloads');
		}
		setInterval(update, 100);    
	}
	morrisUpdating();
	
    /* -----  Morris - Bar Chart ----- */
	function morrisBar() {
		Morris.Bar({
			element: 'xp-morris-bar',
			data: [
				{y: 'Q1', a: 30, b: 20, c: 10},
				{y: 'Q2', a: 10, b: 20, c: 10},
				{y: 'Q3', a: 40, b: 30, c: 20},
				{y: 'Q4', a: 20, b: 30, c: 40},
				{y: 'Q5', a: 10, b: 20, c: 10},
				{y: 'Q6', a: 10, b: 20, c: 30}
			],
			xkey: 'y',
			ykeys: ['a', 'b', 'c'],
			labels: ['Series A', 'Series B','Series C'],
			barColors: ['#4c7cf3', '#2bcd72','#e1e4e9'],
			gridLineColor: '#e1e4e9',
			hideHover: 'auto',
			resize: true
		});
	}
	morrisBar();
	
    /* -----  Morris - Donut Chart ----- */
	function morrisDonut() {
		Morris.Donut({
		  element: 'xp-morris-donut',
		  data: [
			{value: 70, label: 'Foo'},
			{value: 15, label: 'Bar'},
			{value: 10, label: 'Caz'}
		  ],
		  colors: ['#4c7cf3', '#2bcd72','#e1e4e9'],
		  resize: true,
		  formatter: function (x) { return x + "%"}
		});
    }
	morrisDonut();
	
	$(".xp-menu-hamburger").on("click", function(e) {
		setTimeout(function() {		
			$("#xp-morris-updating").empty();
			$("#xp-morris-bar").empty();
			$("#xp-morris-donut").empty();
			morrisUpdating();
			morrisBar();
			morrisDonut();
        }, 500);		
    });
});