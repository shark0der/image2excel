# IMAGE 2 EXCEL

Script to draw images in excel using cells' background color.

## Screenshot

![Demo](../../blob/master/demo.png?raw=true)

## Demo

1. <a href="../../blob/master/beer.xlsx?raw=true" title="Demo file">Download beer.xmlx</a>.
2. Set zoom to 10%

## Usage

1. Use img2csv.php to convert a png image to csv (every cell's value is a rgb color): `img2csv.php file.png out.csv`. Recommended image size is less than 500x500 px. For 600x600 I've got a "Too many styles" error.
2. Import the csv file in Excel.
   **Warning:** Excel is dumb. It will make its best to interpret rgb colors as numbers, ex. it thinks `4effff` is `4` with scientific notation. Dumbass. To overcome this you should open a new excel document, go to Data -> From text, select the csv file, click the first column of the csv, scroll to the right and shift click the last column, select "Text". It will not work anyway, Excel is dumb. I've used LibreOffice.
3. Resize the column width and row height to 10px: resize the first one manually and see what's the equivalent in inches or w/e you're using and then resize all of them. You'll have different values (10px height is not the same as 10px width, because why the fuck not).
4. Add a new macros named "colorize" (google how to enable the "Developer tab")
5. Paste the code from `macros.vb` and make sure to adjust the range of your sheet in the said macros.
6. Set the zoom to 10%. We've used 10px width and height so you should have a natural image size now, i.e. 1x1 px cells.
7. Run the macros. Wait. It will probably hang for a while. Give it time.
8. Profit

## Disclaimer

I am not claiming this is the best method to achieve this task, but it works decently. It's not perfect, perhaps we could prefix our values with "#" in the csv files to make up for Excel's dumbness and then strip the character in the macros. I am however not responsible if this blew up your PC or ate your cat.

## License

BEERWARE-LIKE

<a href="http://beer.tux.ro" target="_blank" title="Buy me a beer!"><img src="../../blob/master/beer.jpg?raw=true" alt="Buy me a beer!"></a>

