"use strict";
$(document).ready(function(){

    /* -----  Chartistjs - Advanced Smil Animations Chart  ----- */
	function chartistjsAdvancedSmileAnimation() {
		var chart = new Chartist.Line('#xp-chartist-advanced-smil-animations', {
		  labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
		  series: [
			[12, 9, 7, 8, 5, 4, 6, 2, 3, 3, 4, 6],
			[4,  5, 3, 7, 3, 5, 5, 3, 4, 4, 5, 5],
			[5,  3, 4, 5, 6, 3, 3, 4, 5, 6, 3, 4],
			[3,  4, 5, 6, 7, 6, 4, 5, 6, 7, 6, 3]
		  ]
		}, {
		  low: 0,
		  plugins: [
			Chartist.plugins.tooltip()
		  ]
		});
		var seq = 0,
		  delays = 80,
		  durations = 500;

		chart.on('created', function() {
		  seq = 0;
		});
		chart.on('draw', function(data) {
		  seq++;
		  if(data.type === 'line') {

			data.element.animate({
			  opacity: {
				begin: seq * delays + 1000,
				dur: durations,
				from: 0,
				to: 1
			  }
			});
		  } else if(data.type === 'label' && data.axis === 'x') {
			data.element.animate({
			  y: {
				begin: seq * delays,
				dur: durations,
				from: data.y + 100,
				to: data.y,
				easing: 'easeOutQuart'
			  }
			});
		  } else if(data.type === 'label' && data.axis === 'y') {
			data.element.animate({
			  x: {
				begin: seq * delays,
				dur: durations,
				from: data.x - 100,
				to: data.x,
				easing: 'easeOutQuart'
			  }
			});
		  } else if(data.type === 'point') {
			data.element.animate({
			  x1: {
				begin: seq * delays,
				dur: durations,
				from: data.x - 10,
				to: data.x,
				easing: 'easeOutQuart'
			  },
			  x2: {
				begin: seq * delays,
				dur: durations,
				from: data.x - 10,
				to: data.x,
				easing: 'easeOutQuart'
			  },
			  opacity: {
				begin: seq * delays,
				dur: durations,
				from: 0,
				to: 1,
				easing: 'easeOutQuart'
			  }
			});
		  } else if(data.type === 'grid') {
			var pos1Animation = {
			  begin: seq * delays,
			  dur: durations,
			  from: data[data.axis.units.pos + '1'] - 30,
			  to: data[data.axis.units.pos + '1'],
			  easing: 'easeOutQuart'
			};
			var pos2Animation = {
			  begin: seq * delays,
			  dur: durations,
			  from: data[data.axis.units.pos + '2'] - 100,
			  to: data[data.axis.units.pos + '2'],
			  easing: 'easeOutQuart'
			};
			var animations = {};
			animations[data.axis.units.pos + '1'] = pos1Animation;
			animations[data.axis.units.pos + '2'] = pos2Animation;
			animations['opacity'] = {
			  begin: seq * delays,
			  dur: durations,
			  from: 0,
			  to: 1,
			  easing: 'easeOutQuart'
			};
			data.element.animate(animations);
		  }
		});
	}
	chartistjsAdvancedSmileAnimation();
	
    /* -----  Chartistjs - Donut Chart Using Fill Rather Than Stroke  ----- */
	function chartistjsDonutFillRather() {
		new Chartist.Pie('#xp-chartist-donut-fill-rather-chart', {
		  series: [45, 35, 20]
		}, {
		  donut: true,
		  donutWidth: 40,
		  donutSolid: true,
		  startAngle: 320,
		  showLabel: true
		});
	}
	chartistjsDonutFillRather();
	
    /* -----  Chartistjs - Stacked Bar Chart  ----- */
	function chartistjsStackedBar() {
		new Chartist.Bar('#xp-chartist-stacked-bar', {
		  labels: ['Q1', 'Q2', 'Q3', 'Q4'],
		  series: [
			[800000, 1200000, 1400000, 1300000],
			[200000, 400000, 500000, 300000],
			[100000, 200000, 400000, 600000]
		  ]
		}, {
		  stackBars: true,
		  axisY: {
			labelInterpolationFnc: function(value) {
			  return (value / 1000) + 'k';
			}
		  },
		  plugins: [
			Chartist.plugins.tooltip()
		  ]
		}).on('draw', function(data) {
		  if(data.type === 'bar') {
			data.element.attr({
			  style: 'stroke-width: 30px'
			});
		  }
		});
	}
	chartistjsStackedBar();
	
	$(".xp-menu-hamburger").on("click", function(e) {
		setTimeout(function() {
			chartistjsAdvancedSmileAnimation();
			chartistjsDonutFillRather();
			chartistjsStackedBar();
        }, 500);		
    });
	
});