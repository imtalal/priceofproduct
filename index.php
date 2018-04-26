<?php
/*
 * index file  ---- price calculation of different shape products
 * Done by : Developer imtalal
 */

class Main {

    public function __construct() {
        // adding css file
        echo '<link rel="stylesheet" href="assets/css/style.css">';
        // adding jquery file
        echo '<script src="assets/js/jquery-3.3.1.min.js"></script>';
        // including ajax
        echo '<script src="assets/js/ajax_file.js"></script>';
    }

}

// making ibject of main class
$mainObj = new Main();
?>


<div class='main'>
    <section class="content">
        <h1>Price Calculator</h1>
        <p>
            Please input required data.
        </p>
    </section>
    <table class="heavyTable">
        <thead>
            <tr>
                <th>Shape</th>
                <th>Input</th>
                <th>Input</th>
                <th>Calculate</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Circle</td>
                <td>Radius: <input required="" id="radID" border="1" type="text" name="radius" required></td>
                <td>
                </td>
                <td><button id="radCalculate" name="radius" value="Calculate Price" >Calculate Price</button></td>
            </tr>
            <tr>
                <td>Rectangle</td>
                <td>Length: <input id="lenID" name="length" type="text" name="length" required>
                </td>
                <td>Width: <input id="widID" name="width" type="text" name="width"  required></td>
                <td><button id="recCalculate" value="Calculate Price" >Calculate Price</button></td>
            </tr>
            <tr>
                <td>Triangle</td>
                <td>Height: <input id="heiID" name="height" type="text" name="height" required></td>
                <td>Base: <input id="baseID" name="base" type="text" name="base" required></td>
                <td><button id="triCalculate" value="Calculate Price" >Calculate Price</button></td>
            </tr>
        </tbody>
    </table>

</div>
