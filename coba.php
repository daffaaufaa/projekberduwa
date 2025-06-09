// HANYA COBA COBA!!!!!!!!!!

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Seat Booking</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #fafafa;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 20px;
    }

    .screen {
      background-color: #f9a9a9;
      border-radius: 20px;
      padding: 30px;
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .row {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .row-label {
      width: 20px;
      text-align: center;
      font-weight: bold;
    }

    .seats {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
    }

    .seat {
      width: 30px;
      height: 30px;
      border: 2px solid white;
      background-color: transparent;
      color: white;
      text-align: center;
      line-height: 30px;
      border-radius: 5px;
      cursor: pointer;
      font-weight: bold;
    }

    .seat.selected {
      background-color: #f24c4c;
    }

    .seat.booked {
      background-color: white;
    }

    .legend {
      display: flex;
      flex-direction: column;
      gap: 10px;
      margin-left: 40px;
      justify-content: center;
    }

    .legend-item {
      display: flex;
      align-items: center;
      gap: 10px;
      color: white;
      font-size: 14px;
    }

    .legend-box {
      width: 20px;
      height: 20px;
      border-radius: 4px;
      border: 2px solid white;
    }

    .no-booking .legend-box {
      background-color: transparent;
    }

    .select-booking .legend-box {
      background-color: #f24c4c;
    }

    .have-booking .legend-box {
      background-color: white;
    }

    .bottom {
      margin-top: 30px;
    }

    .buy-button {
      background-color: #e74c4c;
      border: none;
      color: white;
      font-size: 24px;
      font-weight: bold;
      padding: 12px 40px;
      border-radius: 12px;
      cursor: pointer;
    }

    .seat-row {
      display: flex;
    }
  </style>
</head>
<body>
  <div class="screen">
    <!-- Seat Grid -->
    <div class="seat-row">
      <div>
        <div class="row"><span class="row-label">A</span><div class="seats">
          <div class="seat booked">1</div>
          <div class="seat booked">2</div>
          <div class="seat booked">3</div>
          <div class="seat booked">4</div>
          <div class="seat booked">6</div>
          <div class="seat booked">7</div>
        </div></div>

        <div class="row"><span class="row-label">B</span><div class="seats">
          <div class="seat booked">1</div>
          <div class="seat booked">2</div>
          <div class="seat booked">3</div>
          <div class="seat booked">4</div>
          <div class="seat booked">5</div>
          <div class="seat booked">6</div>
          <div class="seat booked">7</div>
        </div></div>

        <div class="row"><span class="row-label">C</span><div class="seats">
          <div class="seat booked">1</div>
          <div class="seat booked">2</div>
          <div class="seat booked">3</div>
          <div class="seat booked">4</div>
          <div class="seat booked">5</div>
          <div class="seat booked">6</div>
          <div class="seat booked">7</div>
        </div></div>

        <div class="row"><span class="row-label">D</span><div class="seats">
          <div class="seat booked">1</div>
          <div class="seat booked">2</div>
          <div class="seat booked">3</div>
          <div class="seat booked">4</div>
          <div class="seat booked">5</div>
          <div class="seat booked">6</div>
        </div></div>

        <div class="row"><span class="row-label">E</span><div class="seats">
          <div class="seat booked">1</div>
          <div class="seat selected">2</div>
          <div class="seat booked">3</div>
          <div class="seat booked">4</div>
          <div class="seat booked">5</div>
          <div class="seat booked">6</div>
        </div></div>

        <div class="row"><span class="row-label">F</span><div class="seats">
          <div class="seat booked">F1</div>
          <div class="seat booked">F1</div>
          <div class="seat booked">F2</div>
          <div class="seat booked">F2</div>
          <div class="seat booked">F3</div>
          <div class="seat booked">F3</div>
          <div class="seat booked">F4</div>
          <div class="seat booked">F4</div>
          <div class="seat booked">F5</div>
          <div class="seat booked">F5</div>
          <div class="seat booked">F6</div>
          <div class="seat booked">F6</div>
          <div class="seat booked">F7</div>
          <div class="seat booked">F7</div>
        </div></div>
      </div>

      <!-- Legend -->
      <div class="legend">
        <div class="legend-item no-booking">
          <div class="legend-box"></div> NO BOOKING
        </div>
        <div class="legend-item select-booking">
          <div class="legend-box"></div> SELECT BOOKING
        </div>
        <div class="legend-item have-booking">
          <div class="legend-box"></div> HAVE BOOKING
        </div>
      </div>
    </div>
  </div>

  <!-- Buy Button -->
  <div class="bottom">
    <button class="buy-button">BUY NOW</button>
  </div>
</body>
</html>
