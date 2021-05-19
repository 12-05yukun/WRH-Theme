jQuery(document).ready(function ($) {
	var pathname = window.location.pathname;

	if (pathname == "/") {
		$(window).scroll(function (event) {
			if (pageYOffset >= window.innerHeight * 0.66) {
				$("#header").removeClass("top");
			} else {
				$("#header").addClass("top");
			}
		});
	} else {
		$("#header").removeClass("top");
	}

	$("#header-burger").click(function () {
		$("#menu").addClass("open");
	});

	$("#header-burger-close").click(function () {
		$("#menu").removeClass("open");
	});

	$(".room-slicker").slick({
		arrows: false,
		dots: true,
		infinite: true,
		speed: 300,
		slidesToShow: 1,
		adaptiveHeight: true,
	});

	$("#header .icon").click(function () {
		window.scrollTo(0, 0);
	});

	$(".menu-item-has-children").append('<div class="toggle"></div>');

	$(".toggle").click(function (e) {
		if ($(e.target).prev().hasClass("open")) {
			$(e.target).prev().removeClass("open");
		} else {
			$(e.target).prev().addClass("open");
		}
	});

	$(".menu-item-has-children >a:first-child").click(function (e) {
		e.preventDefault();
		if ($(e.target).next().hasClass("open")) {
			$(e.target).next().removeClass("open");
		} else {
			$(e.target).next().addClass("open");
		}
	});

	pickmeup.defaults.locales["de"] = {
		days: [
			"Sontag",
			"Montag",
			"Dienstag",
			"Mittwoche",
			"Donnestag",
			"Freitag",
			"Samstag",
		],
		daysShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
		daysMin: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"],
		months: [
			"Januar",
			"February",
			"März",
			"April",
			"Mai",
			"Juni",
			"Juli",
			"August",
			"September",
			"Oktober",
			"November",
			"Dezember",
		],
		monthsShort: [
			"Jan",
			"Feb",
			"Mar",
			"Apr",
			"Mai",
			"Jun",
			"Jul",
			"Aug",
			"Sep",
			"Okt",
			"Nov",
			"Dez",
		],
	};
	let calendar = document.getElementById("start-text-calendar");
	pickmeup("#start-text-calendar", {
		format: "d. b Y",
		calendars: 2,
		mode: "range",
		separator: "       ",
		prev: "<div class='calendar-prev'></div>",
		next: "<div class='calendar-next'></div>",
		locale: "de",
	});

	let time = pickmeup("#start-text-calendar").get_date('"d. b Y"');
	$("#start-date").text(time[0].replace(/\"/g, ""));
	$("#end-date").text(time[1].replace(/\"/g, ""));

	calendar.addEventListener("pickmeup-fill", function (e) {
		let selected = $(".pmu-days .pmu-selected").not(".pmu-not-in-month");
		selected.last().addClass("last");
		selected.first().addClass("first");
	});

	calendar.addEventListener("pickmeup-change", function (e) {
		$("#start-date").text(e.detail.formatted_date[0].replace(/\"/g, ""));
		$("#end-date").text(e.detail.formatted_date[1].replace(/\"/g, ""));
	});
	calendar.addEventListener("pickmeup-show", function (e) {
		$("body").css({
			overflow: "hidden",
		});
	});
	calendar.addEventListener("pickmeup-hide", function (e) {
		$("body").css({
			overflow: "auto",
		});
	});
});
