document.addEventListener("DOMContentLoaded", function () {
	document.getElementById("result").innerHTML = "Menuju Lebaran 2024";
	// Set the Target date for Ramadan 2024 in WIB (UTC+7) You can adjust the date
	const targetDateUTC = new Date("April 10, 2024 00:00:00 GMT+00:00");
	const targetDateWIB = new Date(
		targetDateUTC.getTime() + 7 * 60 * 60 * 1000
	).getTime(); //give offset 7 hours

	// Update the countdown every second
	const countdownInterval = setInterval(updateCountdown, 1000);

	function updateCountdown() {
		var boxCount = document.getElementById("countdown-ismail");
		var hari = document.getElementById("days");
		var jam = document.getElementById("hours");
		var menit = document.getElementById("minutes");
		var detik = document.getElementById("seconds");

		const currentDateWIB = new Date().getTime() + 7 * 60 * 60 * 1000; // Current date in WIB
		const timeDifference = targetDateWIB - currentDateWIB;

		if (timeDifference <= 0) {
			// If the countdown is over, display a message
			clearInterval(countdownInterval);
			document.getElementById("result").innerHTML = "Lebaran Telah Tiba!";
		} else {
			// Calculate days, hours, minutes, and seconds
			const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
			const hours = Math.floor(
				(timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
			);
			const minutes = Math.floor(
				(timeDifference % (1000 * 60 * 60)) / (1000 * 60)
			);
			const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

			// Display the countdown
			hari.innerHTML = `${days}`;
			jam.innerHTML = `${hours}`;
			menit.innerHTML = `${minutes}`;
			detik.innerHTML = `${seconds}`;
		}
	}
});
