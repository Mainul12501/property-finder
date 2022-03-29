// Home Page Banner Buttons Starts Here
$(document).ready(function () {
	$("#price1st").click(function () {
		$("#priceId").toggle();

		if ($("#priceId2").is(':visible')) {
			$("#priceId2").hide();
		}

		if ($("#amenitiesButton").is(':visible')) {
			$("#amenitiesButton").hide();
		}
		if ($("#areaButton").is(':visible')) {
			$("#areaButton").hide();
		}
		if ($("#areaId").is(':visible')) {
			$("#areaId").hide();
		}

		if ($("#bedBaths").is(':visible')) {
			$("#bedBaths").hide();
		}

	});
});



$(document).ready(function () {
	$("#price2nd").click(function () {
		$("#priceId2").toggle();
		if ($("#priceId").is(':visible')) {
			$("#priceId").hide();
		}

		if ($("#amenitiesButton").is(':visible')) {
			$("#amenitiesButton").hide();
		}
		if ($("#areaButton").is(':visible')) {
			$("#areaButton").hide();
		}
		if ($("#areaId").is(':visible')) {
			$("#areaId").hide();
		}
		if ($("#bedBaths").is(':visible')) {
			$("#bedBaths").hide();
		}

	});
});

$(document).ready(function () {
	$("#area").click(function () {
		$("#areaButton").toggle();
		if ($("#priceId2").is(':visible')) {
			$("#priceId2").hide();
		}

		if ($("#amenitiesButton").is(':visible')) {
			$("#amenitiesButton").hide();
		}
		if ($("#priceId").is(':visible')) {
			$("#priceId").hide();
		}
		if ($("#areaId").is(':visible')) {
			$("#areaId").hide();
		}
		if ($("#bedBaths").is(':visible')) {
			$("#bedBaths").hide();
		}

	});
});

$(document).ready(function () {
	$("#amenities").click(function () {
		$("#amenitiesButton").toggle();
		if ($("#priceId2").is(':visible')) {
			$("#priceId2").hide();
		}

		if ($("#areaButton").is(':visible')) {
			$("#areaButton").hide();
		}
		if ($("#priceId").is(':visible')) {
			$("#priceId").hide();
		}
		if ($("#areaId").is(':visible')) {
			$("#areaId").hide();
		}

		if ($("#bedBaths").is(':visible')) {
			$("#bedBaths").hide();
		}

	});
});

$(document).ready(function () {
	$("#areaSelect").click(function () {
		$("#areaId").toggle();

		if ($("#priceId2").is(':visible')) {
			$("#priceId2").hide();
		}

		if ($("#areaButton").is(':visible')) {
			$("#areaButton").hide();
		}
		if ($("#priceId").is(':visible')) {
			$("#priceId").hide();
		}
		if ($("#amenitiesButton").is(':visible')) {
			$("#amenitiesButton").hide();
		}
		if ($("#bedBaths").is(':visible')) {
			$("#bedBaths").hide();
		}
	});
});


$('#showButton').click(function () {
	$('#showButton').hide();
	$('#lessButton').show();
	$('#homeInput').show();
});

$('#lessButton').click(function () {
	$('#lessButton').hide();
	$('#showButton').show();
	$('#homeInput').hide();
});
// Home Page Banner Buttons Ends Here

// Rent Page Show/Hide Buttons Starts Here
$('#showAllBtn').click(function () {
	$('#showAllBtn').hide();
	$('#showlessBtn').show();
	// $('#hideRentId1').show();
	// $('#hideRentId2').show();
	// $('#hideRentId3').show();
	// $('#hideRentId4').show();
	$('.hide-me-buddy').show();
});

$('#showlessBtn').click(function () {
	$('#showlessBtn').hide();
	$('#showAllBtn').show();
	// $('#hideRentId1').hide();
	// $('#hideRentId2').hide();
	// $('#hideRentId3').hide();
	// $('#hideRentId4').hide();
	$('.hide-me-buddy').hide();
});
// Rent Page Show/Hide Buttons Ends Here

// Rent Page Dot Buttons Starts Here

$(document).ready(function () {
	$("button").click(function (event) {
		event.preventDefault();
	});
	$('#dotButton1').click(function () {
		$('#dotButtonDropdown1').toggle();
		if ($("#dotButtonDropdown2").is(':visible')) {
			$("#dotButtonDropdown2").hide();
		}
		if ($("#dotButtonDropdown3").is(':visible')) {
			$("#dotButtonDropdown3").hide();
		}
		if ($("#dotButtonDropdown4").is(':visible')) {
			$("#dotButtonDropdown4").hide();
		}
		if ($("#dotButtonDropdown5").is(':visible')) {
			$("#dotButtonDropdown5").hide();
		}
		if ($("#dotButtonDropdown6").is(':visible')) {
			$("#dotButtonDropdown6").hide();
		}
		if ($("#dotButtonDropdown7").is(':visible')) {
			$("#dotButtonDropdown7").hide();
		}
		if ($("#dotButtonDropdown8").is(':visible')) {
			$("#dotButtonDropdown8").hide();
		}
		if ($("#dotButtonDropdown9").is(':visible')) {
			$("#dotButtonDropdown9").hide();
		}
		if ($("#dotButtonDropdown10").is(':visible')) {
			$("#dotButtonDropdown10").hide();
		}
	});
});

$('#dotButton2').click(function () {
	$('#dotButtonDropdown2').toggle();
	if ($("#dotButtonDropdown1").is(':visible')) {
		$("#dotButtonDropdown1").hide();
	}
	if ($("#dotButtonDropdown3").is(':visible')) {
		$("#dotButtonDropdown3").hide();
	}
	if ($("#dotButtonDropdown4").is(':visible')) {
		$("#dotButtonDropdown4").hide();
	}
	if ($("#dotButtonDropdown5").is(':visible')) {
		$("#dotButtonDropdown5").hide();
	}
	if ($("#dotButtonDropdown6").is(':visible')) {
		$("#dotButtonDropdown6").hide();
	}
	if ($("#dotButtonDropdown7").is(':visible')) {
		$("#dotButtonDropdown7").hide();
	}
	if ($("#dotButtonDropdown8").is(':visible')) {
		$("#dotButtonDropdown8").hide();
	}
	if ($("#dotButtonDropdown9").is(':visible')) {
		$("#dotButtonDropdown9").hide();
	}
	if ($("#dotButtonDropdown10").is(':visible')) {
		$("#dotButtonDropdown10").hide();
	}
});
$('#dotButton3').click(function () {
	$('#dotButtonDropdown3').toggle();
	if ($("#dotButtonDropdown2").is(':visible')) {
		$("#dotButtonDropdown2").hide();
	}
	if ($("#dotButtonDropdown1").is(':visible')) {
		$("#dotButtonDropdown1").hide();
	}
	if ($("#dotButtonDropdown4").is(':visible')) {
		$("#dotButtonDropdown4").hide();
	}
	if ($("#dotButtonDropdown5").is(':visible')) {
		$("#dotButtonDropdown5").hide();
	}
	if ($("#dotButtonDropdown6").is(':visible')) {
		$("#dotButtonDropdown6").hide();
	}
	if ($("#dotButtonDropdown7").is(':visible')) {
		$("#dotButtonDropdown7").hide();
	}
	if ($("#dotButtonDropdown8").is(':visible')) {
		$("#dotButtonDropdown8").hide();
	}
	if ($("#dotButtonDropdown9").is(':visible')) {
		$("#dotButtonDropdown9").hide();
	}
	if ($("#dotButtonDropdown10").is(':visible')) {
		$("#dotButtonDropdown10").hide();
	}
});
$('#dotButton4').click(function () {
	$('#dotButtonDropdown4').toggle();
	if ($("#dotButtonDropdown2").is(':visible')) {
		$("#dotButtonDropdown2").hide();
	}
	if ($("#dotButtonDropdown3").is(':visible')) {
		$("#dotButtonDropdown3").hide();
	}
	if ($("#dotButtonDropdown1").is(':visible')) {
		$("#dotButtonDropdown1").hide();
	}
	if ($("#dotButtonDropdown5").is(':visible')) {
		$("#dotButtonDropdown5").hide();
	}
	if ($("#dotButtonDropdown6").is(':visible')) {
		$("#dotButtonDropdown6").hide();
	}
	if ($("#dotButtonDropdown7").is(':visible')) {
		$("#dotButtonDropdown7").hide();
	}
	if ($("#dotButtonDropdown8").is(':visible')) {
		$("#dotButtonDropdown8").hide();
	}
	if ($("#dotButtonDropdown9").is(':visible')) {
		$("#dotButtonDropdown9").hide();
	}
	if ($("#dotButtonDropdown10").is(':visible')) {
		$("#dotButtonDropdown10").hide();
	}
});
$('#dotButton5').click(function () {
	$('#dotButtonDropdown5').toggle();
	if ($("#dotButtonDropdown2").is(':visible')) {
		$("#dotButtonDropdown2").hide();
	}
	if ($("#dotButtonDropdown3").is(':visible')) {
		$("#dotButtonDropdown3").hide();
	}
	if ($("#dotButtonDropdown4").is(':visible')) {
		$("#dotButtonDropdown4").hide();
	}
	if ($("#dotButtonDropdown1").is(':visible')) {
		$("#dotButtonDropdown1").hide();
	}
	if ($("#dotButtonDropdown6").is(':visible')) {
		$("#dotButtonDropdown6").hide();
	}
	if ($("#dotButtonDropdown7").is(':visible')) {
		$("#dotButtonDropdown7").hide();
	}
	if ($("#dotButtonDropdown8").is(':visible')) {
		$("#dotButtonDropdown8").hide();
	}
	if ($("#dotButtonDropdown9").is(':visible')) {
		$("#dotButtonDropdown9").hide();
	}
	if ($("#dotButtonDropdown10").is(':visible')) {
		$("#dotButtonDropdown10").hide();
	}
});
$('#dotButton6').click(function () {
	$('#dotButtonDropdown6').toggle();
	if ($("#dotButtonDropdown2").is(':visible')) {
		$("#dotButtonDropdown2").hide();
	}
	if ($("#dotButtonDropdown3").is(':visible')) {
		$("#dotButtonDropdown3").hide();
	}
	if ($("#dotButtonDropdown4").is(':visible')) {
		$("#dotButtonDropdown4").hide();
	}
	if ($("#dotButtonDropdown5").is(':visible')) {
		$("#dotButtonDropdown5").hide();
	}
	if ($("#dotButtonDropdown1").is(':visible')) {
		$("#dotButtonDropdown1").hide();
	}
	if ($("#dotButtonDropdown7").is(':visible')) {
		$("#dotButtonDropdown7").hide();
	}
	if ($("#dotButtonDropdown8").is(':visible')) {
		$("#dotButtonDropdown8").hide();
	}
	if ($("#dotButtonDropdown9").is(':visible')) {
		$("#dotButtonDropdown9").hide();
	}
	if ($("#dotButtonDropdown10").is(':visible')) {
		$("#dotButtonDropdown10").hide();
	}
});
$('#dotButton7').click(function () {
	$('#dotButtonDropdown7').toggle();
	if ($("#dotButtonDropdown2").is(':visible')) {
		$("#dotButtonDropdown2").hide();
	}
	if ($("#dotButtonDropdown3").is(':visible')) {
		$("#dotButtonDropdown3").hide();
	}
	if ($("#dotButtonDropdown4").is(':visible')) {
		$("#dotButtonDropdown4").hide();
	}
	if ($("#dotButtonDropdown5").is(':visible')) {
		$("#dotButtonDropdown5").hide();
	}
	if ($("#dotButtonDropdown6").is(':visible')) {
		$("#dotButtonDropdown6").hide();
	}
	if ($("#dotButtonDropdown1").is(':visible')) {
		$("#dotButtonDropdown1").hide();
	}
	if ($("#dotButtonDropdown8").is(':visible')) {
		$("#dotButtonDropdown8").hide();
	}
	if ($("#dotButtonDropdown9").is(':visible')) {
		$("#dotButtonDropdown9").hide();
	}
	if ($("#dotButtonDropdown10").is(':visible')) {
		$("#dotButtonDropdown10").hide();
	}
});
$('#dotButton8').click(function () {
	$('#dotButtonDropdown8').toggle();
	if ($("#dotButtonDropdown2").is(':visible')) {
		$("#dotButtonDropdown2").hide();
	}
	if ($("#dotButtonDropdown3").is(':visible')) {
		$("#dotButtonDropdown3").hide();
	}
	if ($("#dotButtonDropdown4").is(':visible')) {
		$("#dotButtonDropdown4").hide();
	}
	if ($("#dotButtonDropdown5").is(':visible')) {
		$("#dotButtonDropdown5").hide();
	}
	if ($("#dotButtonDropdown6").is(':visible')) {
		$("#dotButtonDropdown6").hide();
	}
	if ($("#dotButtonDropdown7").is(':visible')) {
		$("#dotButtonDropdown7").hide();
	}
	if ($("#dotButtonDropdown1").is(':visible')) {
		$("#dotButtonDropdown1").hide();
	}
	if ($("#dotButtonDropdown9").is(':visible')) {
		$("#dotButtonDropdown9").hide();
	}
	if ($("#dotButtonDropdown10").is(':visible')) {
		$("#dotButtonDropdown10").hide();
	}
});
$('#dotButton9').click(function () {
	$('#dotButtonDropdown9').toggle();
	if ($("#dotButtonDropdown2").is(':visible')) {
		$("#dotButtonDropdown2").hide();
	}
	if ($("#dotButtonDropdown3").is(':visible')) {
		$("#dotButtonDropdown3").hide();
	}
	if ($("#dotButtonDropdown4").is(':visible')) {
		$("#dotButtonDropdown4").hide();
	}
	if ($("#dotButtonDropdown5").is(':visible')) {
		$("#dotButtonDropdown5").hide();
	}
	if ($("#dotButtonDropdown6").is(':visible')) {
		$("#dotButtonDropdown6").hide();
	}
	if ($("#dotButtonDropdown7").is(':visible')) {
		$("#dotButtonDropdown7").hide();
	}
	if ($("#dotButtonDropdown8").is(':visible')) {
		$("#dotButtonDropdown8").hide();
	}
	if ($("#dotButtonDropdown1").is(':visible')) {
		$("#dotButtonDropdown1").hide();
	}
	if ($("#dotButtonDropdown10").is(':visible')) {
		$("#dotButtonDropdown10").hide();
	}
});
$('#dotButton10').click(function () {
	$('#dotButtonDropdown10').toggle();
	if ($("#dotButtonDropdown2").is(':visible')) {
		$("#dotButtonDropdown2").hide();
	}
	if ($("#dotButtonDropdown3").is(':visible')) {
		$("#dotButtonDropdown3").hide();
	}
	if ($("#dotButtonDropdown4").is(':visible')) {
		$("#dotButtonDropdown4").hide();
	}
	if ($("#dotButtonDropdown5").is(':visible')) {
		$("#dotButtonDropdown5").hide();
	}
	if ($("#dotButtonDropdown6").is(':visible')) {
		$("#dotButtonDropdown6").hide();
	}
	if ($("#dotButtonDropdown7").is(':visible')) {
		$("#dotButtonDropdown7").hide();
	}
	if ($("#dotButtonDropdown8").is(':visible')) {
		$("#dotButtonDropdown8").hide();
	}
	if ($("#dotButtonDropdown9").is(':visible')) {
		$("#dotButtonDropdown9").hide();
	}
	if ($("#dotButtonDropdown1").is(':visible')) {
		$("#dotButtonDropdown1").hide();
	}
});
// Rent Page Dot Buttons Ends Here

// Home Page & Rent Page BedBath Buttons Starts Here
$('#bedBath').click(function () {
	$('#bedBaths').toggle();
	if ($("#priceId2").is(':visible')) {
		$("#priceId2").hide();
	}

	if ($("#areaButton").is(':visible')) {
		$("#areaButton").hide();
	}
	if ($("#priceId").is(':visible')) {
		$("#priceId").hide();
	}
	if ($("#amenitiesButton").is(':visible')) {
		$("#amenitiesButton").hide();
	}
	if ($("#areaId").is(':visible')) {
		$("#areaId").hide();
	}
});

$('#bedBathRent').click(function () {
	$('#bedBathsRent').toggle();
	if ($("#priceIdRent").is(':visible')) {
		$("#priceIdRent").hide();
	}
});
// Home Page & Rent Page BedBath Buttons Starts Here

// Rent Page Price Buttons Starts Here
$('#priceBtnSelect').click(function () {
	$('#priceIdRent').toggle();
	if ($("#bedBathsRent").is(':visible')) {
		$("#bedBathsRent").hide();
	}
});
// Rent Page Price Buttons Ends Here

// Commercial Rent Page Read More/Less Buttons Starts Here
$('#readMore2').click(function () {
	$('#readMore2').hide(500);
	$('#readLess2').show(500);
	$('#detailsHide').show(500);
	$('#smallP').hide(500);
});

$('#readLess2').click(function () {
	$('#readLess2').hide(500);
	$('#readMore2').show(500);
	$('#detailsHide').hide(500);
    $('#smallP').show(500);
});
// Commercial Rent Page Read More/Less Buttons Ends Here

// Home Page CheckBox Buttons Starts Here
$('#checkBox').change(function () {
	if ($(this).prop('checked')) {
		$('#allFurnishing').hide();
		$('#area').hide();
		$('#amenities').hide();
		$('#placeholder').css('width', '100%');
		$('#placeholder').css('margin-left', '-35px');
		$('#price1st').css('margin', '0px');
		$('#homeSearchInputTop').css('min-width', '53.8%');
		$('#price2nd').hide();
		$('#bedBath').hide();
		$('#price1st').show();
		$('#areaSelect').show();
	} else {
		$('#allFurnishing').show();
		$('#area').show();
		$('#amenities').show();
		$('#placeholder').css('width', '100%');
		$('#placeholder').css('margin-left', '0px');
		$('#area').css('min-width', '100px');
		$('#amenities').css('min-width', '100px');
		$('#homeSearchInputTop').css('min-width', '55.5%');
		$('#price2nd').show();
		$('#bedBath').show();
		$('#price1st').hide();
		$('#areaSelect').hide();
	}
});
// Home Page CheckBox Buttons Ends Here

// Commercial Rent Page Scroll JS Starts Here
var scrollSection = document.getElementById("scroll");
window.addEventListener('scroll', function () {
	if (window.pageYOffset > 955) {
		scrollSection.style.display = 'block';
	} else {
		scrollSection.style.display = 'none';
	}
});
// Commercial Rent Page Scroll JS Ends Here

// Rent Page Aminities Checkbox Starts Here
$('#showAminities').click(function () {
	$('#hideAminities').show();
	$('#showAminities').hide();
	$('#aminitiesCheck01').show();
	$('#aminitiesCheck02').show();
	$('#aminitiesCheck03').show();
	$('#aminitiesCheck04').show();
	$('#aminitiesCheck05').show();
	$('#aminitiesCheck06').show();
	$('#aminitiesCheck07').show();
	$('#aminitiesCheck08').show();
	$('#aminitiesCheck09').show();
	$('#aminitiesCheck10').show();
	$('#aminitiesCheck11').show();
});
$('#hideAminities').click(function () {
	$('#showAminities').show();
	$('#hideAminities').hide();
	$('#aminitiesCheck01').hide();
	$('#aminitiesCheck02').hide();
	$('#aminitiesCheck03').hide();
	$('#aminitiesCheck04').hide();
	$('#aminitiesCheck05').hide();
	$('#aminitiesCheck06').hide();
	$('#aminitiesCheck07').hide();
	$('#aminitiesCheck08').hide();
	$('#aminitiesCheck09').hide();
	$('#aminitiesCheck10').hide();
	$('#aminitiesCheck11').hide();
});
// Rent Page Aminities Checkbox Ends Here



$("#monthly").click(function () {
	// If the clicked element has the active class, remove the active class from EVERY .nav-link>.state element
	if ($(this).hasClass("active")) {
		$("#monthly").removeClass("active");
	}
	// Else, the element doesn't have the active class, so we remove it from every element before applying it to the element that was clicked
	else {
		$("#yearly").removeClass("active");
		$(this).addClass("active");
	}
});


$("#yearly").click(function () {
	// If the clicked element has the active class, remove the active class from EVERY .nav-link>.state element
	if ($(this).hasClass("active")) {
		$("#yearly").removeClass("active");
	}
	// Else, the element doesn't have the active class, so we remove it from every element before applying it to the element that was clicked
	else {
		$("#monthly").removeClass("active");
		$(this).addClass("active");
	}
});


$("#buyBtn").click(function () {
	// If the clicked element has the active class, remove the active class from EVERY .nav-link>.state element
	if ($(this).hasClass("active")) {
		$("#buyBtn").removeClass("active");
	}
	// Else, the element doesn't have the active class, so we remove it from every element before applying it to the element that was clicked
	else {
		$("#rentBtn").removeClass("active");
		$(this).addClass("active");
	}
    $('#reqType').val('buy');
});


$("#rentBtn").click(function () {
	// If the clicked element has the active class, remove the active class from EVERY .nav-link>.state element
	if ($(this).hasClass("active")) {
		$("#rentBtn").removeClass("active");
	}
	// Else, the element doesn't have the active class, so we remove it from every element before applying it to the element that was clicked
	else {
		$("#buyBtn").removeClass("active");
		$(this).addClass("active");
	}
    $('#reqType').val('rent');
});


$("#yearly2").click(function () {
	// If the clicked element has the active class, remove the active class from EVERY .nav-link>.state element
	if ($(this).hasClass("active")) {
		$("#yearly2").removeClass("active");
	}
	// Else, the element doesn't have the active class, so we remove it from every element before applying it to the element that was clicked
	else {
		$("#monthly2").removeClass("active");
		$(this).addClass("active");
		$("#weekly").removeClass("active");
		$(this).addClass("active");
		$("#daily").removeClass("active");
		$(this).addClass("active");

	}
});

$("#monthly2").click(function () {
	// If the clicked element has the active class, remove the active class from EVERY .nav-link>.state element
	if ($(this).hasClass("active")) {
		$("#monthly2").removeClass("active");
	}
	// Else, the element doesn't have the active class, so we remove it from every element before applying it to the element that was clicked
	else {
		$("#yearly2").removeClass("active");
		$(this).addClass("active");
		$("#weekly").removeClass("active");
		$(this).addClass("active");
		$("#daily").removeClass("active");
		$(this).addClass("active");

	}
});

$("#weekly").click(function () {
	// If the clicked element has the active class, remove the active class from EVERY .nav-link>.state element
	if ($(this).hasClass("active")) {
		$("#weekly").removeClass("active");
	}
	// Else, the element doesn't have the active class, so we remove it from every element before applying it to the element that was clicked
	else {
		$("#monthly2").removeClass("active");
		$(this).addClass("active");
		$("#yearly2").removeClass("active");
		$(this).addClass("active");
		$("#daily").removeClass("active");
		$(this).addClass("active");

	}
});

$("#daily").click(function () {
	// If the clicked element has the active class, remove the active class from EVERY .nav-link>.state element
	if ($(this).hasClass("active")) {
		$("#daily").removeClass("active");
	}
	// Else, the element doesn't have the active class, so we remove it from every element before applying it to the element that was clicked
	else {
		$("#monthly2").removeClass("active");
		$(this).addClass("active");
		$("#weekly").removeClass("active");
		$(this).addClass("active");
		$("#yearly2").removeClass("active");
		$(this).addClass("active");

	}
});

$("#yearlyRent").click(function () {
	// If the clicked element has the active class, remove the active class from EVERY .nav-link>.state element
	if ($(this).hasClass("active")) {
		$("#yearlyRent").removeClass("active");
	}
	// Else, the element doesn't have the active class, so we remove it from every element before applying it to the element that was clicked
	else {
		$("#monthlyRent").removeClass("active");
		$(this).addClass("active");
		$("#weeklyRent").removeClass("active");
		$(this).addClass("active");
		$("#dailyRent").removeClass("active");
		$(this).addClass("active");

	}
});

$("#monthlyRent").click(function () {
	// If the clicked element has the active class, remove the active class from EVERY .nav-link>.state element
	if ($(this).hasClass("active")) {
		$("#monthlyRent").removeClass("active");
	}
	// Else, the element doesn't have the active class, so we remove it from every element before applying it to the element that was clicked
	else {
		$("#yearlyRent").removeClass("active");
		$(this).addClass("active");
		$("#weeklyRent").removeClass("active");
		$(this).addClass("active");
		$("#dailyRent").removeClass("active");
		$(this).addClass("active");

	}
});

$("#weeklyRent").click(function () {
	// If the clicked element has the active class, remove the active class from EVERY .nav-link>.state element
	if ($(this).hasClass("active")) {
		$("#weeklyRent").removeClass("active");
	}
	// Else, the element doesn't have the active class, so we remove it from every element before applying it to the element that was clicked
	else {
		$("#monthlyRent").removeClass("active");
		$(this).addClass("active");
		$("#yearlyRent").removeClass("active");
		$(this).addClass("active");
		$("#dailyRent").removeClass("active");
		$(this).addClass("active");

	}
});

$("#dailyRent").click(function () {
	// If the clicked element has the active class, remove the active class from EVERY .nav-link>.state element
	if ($(this).hasClass("active")) {
		$("#dailyRent").removeClass("active");
	}
	// Else, the element doesn't have the active class, so we remove it from every element before applying it to the element that was clicked
	else {
		$("#monthlyRent").removeClass("active");
		$(this).addClass("active");
		$("#weeklyRent").removeClass("active");
		$(this).addClass("active");
		$("#yearlyRent").removeClass("active");
		$(this).addClass("active");
	}
});

// Agents And Broker Page JS Starts Here
$("#agents").click(function () {
	$("#broker").hide();
	$("#agentSection").show();
	$("#service").show();
	$("#language").show();
	$("#nationality").show();
	// If the clicked element has the active class, remove the active class from EVERY .nav-link>.state element
	if ($(this).hasClass("switecher-btn-active")) {
		$("#agents").removeClass("switecher-btn-active");
	}
	// Else, the element doesn't have the active class, so we remove it from every element before applying it to the element that was clicked
	else {
		$("#companies").removeClass("switecher-btn-active");
		$(this).addClass("switecher-btn-active");
	}
});

$("#companies").click(function () {
	$("#agentSection").hide();
	$("#broker").show();
	$("#service").hide();
	$("#language").hide();
	$("#nationality").hide();
	// If the clicked element has the active class, remove the active class from EVERY .nav-link>.state element
	if ($(this).hasClass("switecher-btn-active")) {
		$("#companies").removeClass("switecher-btn-active");
	}
	// Else, the element doesn't have the active class, so we remove it from every element before applying it to the element that was clicked
	else {
		$("#agents").removeClass("switecher-btn-active");
		$(this).addClass("switecher-btn-active");
	}
});
// Agents And Broker Page JS Ends Here
