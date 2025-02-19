# Word Frequency Counter

## Overview
The **Word Frequency Counter** is a simple web-based tool that analyzes text input, removes common stop words, and calculates word frequency. Users can choose sorting options and limit the number of words displayed in the results.

## Features
- Accepts text input through a web form
- Removes common stop words to improve accuracy
- Counts occurrences of each word
- Allows sorting results in **ascending** or **descending** order
- Limits the number of displayed words
- Displays results in a structured table

## Technologies Used
- **HTML, CSS** – Frontend for user input and display
- **PHP** – Backend processing and word frequency calculation

## Installation & Setup
1. Clone this repository:
   ```sh
   git clone https://github.com/your-repo/word-frequency-counter.git
   ```
2. Navigate to the project folder:
   ```sh
   cd word-frequency-counter
   ```
3. Ensure you have a working **PHP environment** (e.g., XAMPP, WAMP, or LAMP).
4. Place the project files in the server directory (`htdocs` for XAMPP or `/var/www/html` for Apache servers).
5. Start the local server and access the project via:
   ```
   http://localhost/word-frequency-counter
   ```

## Usage
1. Enter text in the provided textarea.
2. Select sorting order (**Ascending** or **Descending**).
3. Specify the number of words to display.
4. Click **"Calculate Word Frequency"** to generate results.

## File Structure
```
word-frequency-counter/
│── index.html         # Main frontend file
│── styles.css         # Stylesheet
│── process.php        # PHP backend logic for processing text
│── README.md          # Project documentation
```

## Example Output
```
Word Frequency Counter Result
-----------------------------
| Word   | Frequency |
|--------|----------|
| hello  | 5        |
| world  | 3        |
| text   | 2        |
```

## Contributing
Contributions are welcome! Feel free to submit issues and pull requests.

## License
This project is open-source and available under the **MIT License**.
