/**
 * Analytics Dashboard
 */

'use strict';
(function () {
  let cardColor, headingColor, labelColor, legendColor, borderColor, shadeColor;

  if (isDarkStyle) {
    cardColor = config.colors_dark.cardColor;
    headingColor = config.colors_dark.headingColor;
    labelColor = config.colors_dark.textMuted;
    legendColor = config.colors_dark.bodyColor;
    borderColor = config.colors_dark.borderColor;
    shadeColor = 'dark';
  } else {
    cardColor = config.colors.cardColor;
    headingColor = config.colors.headingColor;
    labelColor = config.colors.textMuted;
    legendColor = config.colors.bodyColor;
    borderColor = config.colors.borderColor;
    shadeColor = 'light';
  }

  Apex.chart = {
		fontFamily: 'inherit',
		locales: [{
			"name": "fa",
			"options": {
				"months": ["ژانویه", "فوریه", "مارس", "آوریل", "می", "ژوئن", "جولای", "آگوست", "سپتامبر", "اکتبر", "نوامبر", "دسامبر"],
				"shortMonths": ["ژانویه", "فوریه", "مارس", "آوریل", "می", "ژوئن", "جولای", "آگوست", "سپتامبر", "اکتبر", "نوامبر", "دسامبر"],
				"days": ["یکشنبه", "دوشنبه", "سه‌شنبه", "چهارشنبه", "پنجشنبه", "جمعه", "شنبه"],
				"shortDays": ["ی", "د", "س", "چ", "پ", "ج", "ش"],
				"toolbar": {
					"exportToSVG": "دریافت SVG",
					"exportToPNG": "دریافت PNG",
					"menu": "فهرست",
					"selection": "انتخاب",
					"selectionZoom": "بزرگنمایی قسمت انتخاب شده",
					"zoomIn": "بزرگ نمایی",
					"zoomOut": "کوچک نمایی",
					"pan": "جا به جایی",
					"reset": "بازنشانی بزرگ نمایی"
				}
			}
		}],
		defaultLocale: "fa"
	}

  // Report Chart


    // Order Summary - Area Chart
    // --------------------------------------------------------------------
    const orderSummaryEl = document.querySelector('#orderSummaryChart'),
        orderSummaryConfig = {
            chart: {
                height: 265,
                type: 'area',
                toolbar: false,
                dropShadow: {
                    enabled: true,
                    top: 18,
                    left: 2,
                    blur: 3,
                    color: config.colors.primary,
                    opacity: 0.15
                }
            },
            markers: {
                size: 6,
                colors: 'transparent',
                strokeColors: 'transparent',
                strokeWidth: 4,
                discrete: [
                    {
                        fillColor: cardColor,
                        seriesIndex: 0,
                        dataPointIndex: 9,
                        strokeColor: config.colors.primary,
                        strokeWidth: 4,
                        size: 6,
                        radius: 2
                    }
                ],
                hover: {
                    size: 7
                }
            },
            series: [
                {
                    name: 'سری 1',
                    data: [15, 18, 13, 19, 16, 31, 18, 26, 23, 39]
                }
            ],
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth',
                lineCap: 'round'
            },
            colors: [config.colors.primary],
            fill: {
                type: 'gradient',
                gradient: {
                    shade: shadeColor,
                    shadeIntensity: 0.8,
                    opacityFrom: 0.7,
                    opacityTo: 0.25,
                    stops: [0, 95, 100]
                }
            },
            grid: {
                show: true,
                borderColor: borderColor,
                padding: {
                    top: -15,
                    bottom: -10,
                    left: 15,
                    right: 10
                }
            },
            xaxis: {
                categories: ['فروردین', 'اردیبهشت', 'خرداد', 'تیر', 'مرداد', 'شهریور', 'مهر', 'آبان', 'آذر', 'دی'],
                labels: {
                    offsetX: 0,
                    style: {
                        colors: labelColor,
                        fontSize: '13px'
                    }
                },
                axisBorder: {
                    show: false
                },
                axisTicks: {
                    show: false
                },
                lines: {
                    show: false
                }
            },
            yaxis: {
                labels: {
                    offsetX: 7,
                    formatter: function (val) {
                        return val + ' تومان';
                    },
                    style: {
                        fontSize: '13px',
                        colors: labelColor
                    }
                },
                min: 0,
                max: 40,
                tickAmount: 4
            }
        };
    if (typeof orderSummaryEl !== undefined && orderSummaryEl !== null) {
        const orderSummary = new ApexCharts(orderSummaryEl, orderSummaryConfig);
        orderSummary.render();
    }



    // Analytics - Bar Chart
    // --------------------------------------------------------------------
    const analyticsBarChartEl = document.querySelector('#analyticsBarChart'),
        analyticsBarChartConfig = {
            chart: {
                height: 250,
                type: 'bar',
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '20%',
                    borderRadius: 3,
                    startingShape: 'rounded'
                }
            },
            dataLabels: {
                enabled: false
            },
            colors: [config.colors.primary, config.colors_label.primary],
            series: [
                {
                    name: '1400',
                    data: [8, 9, 15, 20, 14, 22, 29, 27, 13]
                },
                {
                    name: '1401',
                    data: [5, 7, 12, 17, 9, 17, 26, 21, 10]
                }
            ],
            grid: {
                borderColor: borderColor,
                padding: {
                    bottom: -8
                }
            },
            xaxis: {
                categories: ['فروردین', 'اردیبهشت', 'خرداد', 'تیر', 'مرداد', 'شهریور', 'مهر', 'آبان', 'آذر'],
                axisBorder: {
                    show: false
                },
                axisTicks: {
                    show: false
                },
                labels: {
                    style: {
                        colors: labelColor
                    }
                }
            },
            yaxis: {
                min: 0,
                max: 30,
                tickAmount: 3,
                labels: {
                    style: {
                        colors: labelColor
                    }
                }
            },
            legend: {
                show: false
            },
            tooltip: {
                y: {
                    formatter: function (val) {
                        return val + ' هزار تومان';
                    }
                }
            }
        };
    if (typeof analyticsBarChartEl !== undefined && analyticsBarChartEl !== null) {
        const analyticsBarChart = new ApexCharts(analyticsBarChartEl, analyticsBarChartConfig);
        analyticsBarChart.render();
    }

})();
