# CurrencyDataFeed API Scripts

This repository contains ready-to-use PHP and Node.js scripts for interacting with the [CurrencyDataFeed API](https://currencydatafeed.com/documentation.php). These scripts demonstrate how to fetch currency exchange rates using the API.

## Features

- Fetch currency exchange rates for single or multiple pairs.
- Works with PHP and Node.js.
- Includes error handling for API responses.

---

## Prerequisites

Before using these scripts, ensure you have the following:

1. **API Access Key**: You need to sign up at [CurrencyDataFeed](https://currencydatafeed.com/) to obtain your API key.
2. **PHP Installed**: For the PHP script, ensure you have PHP installed on your system.
3. **Node.js Installed**: For the Node.js script, ensure you have Node.js installed.

---

## Installation and Usage

### PHP Script

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/yourusername/currencydatafeed-api-scripts.git
   cd currencydatafeed-api-scripts/php-scripts
   ```

2. **Edit the Script**:
   - Open the `fetch-currencies.php` file in a text editor.
   - Replace the placeholder `YOUR_ACCESS_KEY` with your actual API key.

3. **Run the Script**:
   ```bash
   php fetch-currencies.php
   ```

4. **Expected Output**:
   The script will print the API's JSON response to the console.

---

### Node.js Script

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/yourusername/currencydatafeed-api-scripts.git
   cd currencydatafeed-api-scripts/nodejs-scripts
   ```

2. **Install Dependencies**:
   ```bash
   npm install axios
   ```

3. **Edit the Script**:
   - Open the `fetch-currencies.js` file in a text editor.
   - Replace the placeholder `YOUR_ACCESS_KEY` with your actual API key.

4. **Run the Script**:
   ```bash
   node fetch-currencies.js
   ```

5. **Expected Output**:
   The script will print the API's JSON response to the console.

---

## Customization

- **Currencies**:
  - Modify the `currencies` variable in both scripts to specify the currency pairs you want to fetch. For example:
    ```php
    $currencies = 'EUR/USD+USD/JPY';
    ```
    ```javascript
    const currencies = 'EUR/USD+USD/JPY';
    ```

- **Error Handling**:
  - Both scripts include error handling to help you debug issues with the API.

---

## Troubleshooting

- **Missing Parameters**:
  Ensure you have included all required parameters (`currency` and `token`) in the API request.

- **Invalid API Key**:
  Double-check your API key in the script and ensure it is active.

- **Rate Limits**:
  The API may enforce rate limits. Check the [API documentation](https://currencydatafeed.com/documentation.php) for details.

---

## Contributing

If you’d like to contribute, feel free to fork this repository and submit a pull request with your changes.

---

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
