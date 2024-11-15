const axios = require('axios');

const accessToken = 'YOUR_ACCESS_TOKEN';
const currencies = 'EUR/USD+USD/JPY';
// Include the token as a query parameter
const url = `https://currencydatafeed.com/api/data.php?currency=${currencies}&token=${accessToken}`;

axios.get(url)
  .then(response => {
    // Print the raw JSON response
    console.log(JSON.stringify(response.data, null, 2));
  })
  .catch(error => {
    console.error('Error:', error.response ? error.response.data : error.message);
  });
