jQuery(document).ready(function ($) {
	reveal();
	var pathname = window.location.pathname;
	if (pathname == "/" || pathname == "/en/" || pathname == "/de/") {
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

	$(".current-menu-parent .sub-menu").addClass("open");

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

	const today = new Date();
	const tomorrow = new Date(today);
	tomorrow.setDate(tomorrow.getDate() + 1);

	let calendar = document.getElementById("start-text-calendar");
	pickmeup("#start-text-calendar", {
		format: "d. b Y",
		calendars: 2,
		mode: "range",
		separator: "       ",
		prev: "<div class='calendar-prev'></div>",
		next: "<div class='calendar-next'></div>",
		locale: "de",
		date: [new Date(), tomorrow],
		min: new Date(),
	});

	let time = pickmeup("#start-text-calendar").get_date('"d. b Y"');
	$("#start-date").text(time[0].replace(/\"/g, ""));
	$("#end-date").text(time[1].replace(/\"/g, ""));

	calendar.addEventListener("pickmeup-fill", function (e) {
		let selected = $(".pmu-days .pmu-selected").not(".pmu-not-in-month");
		selected.last().addClass("last");
		selected.first().addClass("first");
	});

	const getModifiedTime = (unparsedTime) => {
		let modified = new Date(unparsedTime);
		let day = modified.getDate();
		let month = modified.getMonth() + 1;
		let year = modified.getFullYear();
		return `${day}.${month}.${year}`;
	};

	let arrival = getModifiedTime(today);
	let departure = getModifiedTime(tomorrow);

	calendar.addEventListener("pickmeup-change", function (e) {
		$("#start-date").text(e.detail.formatted_date[0].replace(/\"/g, ""));
		$("#end-date").text(e.detail.formatted_date[1].replace(/\"/g, ""));
		arrival = Date.parse(e.detail.date[0]);
		departure = Date.parse(e.detail.date[1]);
		arrival = getModifiedTime(arrival);
		departure = getModifiedTime(departure);
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

	$("#find-room").click(function () {
		let gast = $("#gast").val();
		window.open(
			"https://onepagebooking.com/hoteldunord?arrival=" +
				arrival +
				"&departure=" +
				departure +
				"&lang=de&ratetype=bar&adults=" +
				gast +
				"&children=0"
		);
	});

	$(".menu-item-object-page").append('<div class="line"></div>');

	$(".menu-item-object-page a").hover(
		function (e) {
			$(e.target).next().addClass("menu-hover-underline");
		},
		function (e) {
			$(e.target).next().removeClass("menu-hover-underline");
		}
	);

	var moveLeft = 20;
	var moveDown = 10;

	$(".room-ausstatt").hover(
		function (e) {
			$(e.target).next().show();
			//.css('top', e.pageY + moveDown)
			//.css('left', e.pageX + moveLeft)
			//.appendTo('body');
		},
		function (e) {
			$(e.target).next().hide();
		}
	);
	$(".room-ausstatt").mousemove(function (e) {
		$(e.target)
			.next()
			.css("top", e.pageY + moveDown)
			.css("left", e.pageX + moveLeft);
	});
});

function reveal() {
	ScrollReveal().reveal(".fulltext", {
		delay: 200,
		origin: "bottom",
		distance: "20px",
	});
	ScrollReveal().reveal(".right .block-content", {
		delay: 200,
		origin: "left",
		distance: "20px",
	});
	ScrollReveal().reveal(".block-image", {
		delay: 200,
	});

	ScrollReveal().reveal(".left .block-content", {
		delay: 200,
		origin: "right",
		distance: "20px",
	});

	ScrollReveal().reveal(".newsletter-box", {
		delay: 200,
		origin: "bottom",
		distance: "20px",
	});

	ScrollReveal().reveal(".quote", {
		delay: 200,
		origin: "bottom",
		distance: "20px",
	});
	ScrollReveal().reveal(".kontakt", {
		delay: 200,
		origin: "bottom",
		distance: "20px",
	});
}
