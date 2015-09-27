<?php
/**
 * Created by IntelliJ IDEA.
 * User: sachin
 * Date: 9/3/15
 * Time: 7:38 AM
 */
include '../CommonPage/includeAll.php'
?>
<html>
<head>
    <title>
        Lost and Found
    </title>
<head>

<body>
<div id="header">
    <h2>Lost and Found </h2>
</div><!-- header -->

<div id="wrapper">
    <div id="firstColumnn">
        <div id="reportButtons">
            <a href="report.php">
                <div id="lostButton">
                    <p>Report Lost</p>
                </div>
            </a>
            <a href="report.php">
                <div id="foundButton">
                    <p>Report Found</p>
                </div>
            </a>

        </div><!-- div buttons -->

        <div id="secondBox">
            <select>
                <option>Found Item</option>
                <option>Lost Item</option>
            </select>

            <input type="text" placeholder="Search">

            <input type="button" value="search"/>
        </div><!-- second box -->

        <div id="infoCollection">

            <div class="infoBox">
                <div class="infoImg">
                    <img src="../Resource/image/Capture.png">
                </div>
                <div class="infoDescription" >
                    <h4>Closed Umbrella &nbsp;&nbsp;<span>Found</span> </h4>
                    <p>fasdf ffffffffffffffffffffffffffffasdf</p>
                    <p><strong>Phone no:</strong> 98989898121 <p>
                    <p><strong>Email: </strong> fasdfcasd@gmail.com <p>
                </div>
            </div><!-- infoBox -->

            <div class="infoBox">
                <div class="infoImg">
                    <img src="../Resource/image/Capture.png">
                </div>
                <div class="infoDescription" >
                    <h4>Closed Umbrella &nbsp;&nbsp;<span>Found</span> </h4>
                    <p>fasdf ffffffffffffffffffffffffffffasdf</p>
                    <p><strong>Phone no:</strong> 98989898121 <p>
                    <p><strong>Email: </strong> fasdfcasd@gmail.com <p>
                </div>
            </div><!-- infoBox -->

        </div><!-- infoCollection -->

    </div><!-- first column -->

    <div id="secondColoumn">

        <div id="reportBox">
            <h3>Recently Lost</h3>
            <div id="reportInfo">
                <p>Call: 08809898098</p>
                <img style="width: 100%;" src="../Resource/image/Capture.PNG">
                <p>Ubrella</p>
            </div>
        </div><!-- reportBox -->

        <div id="reportBox">
            <h3>Recently Lost</h3>
            <div id="reportInfo">
                <p>Call: 08809898098</p>
                <img style="width: 100%;" src="../Resource/image/Capture.PNG">
                <p>Ubrella</p>
            </div>
        </div><!-- reportBox -->

    </div><!-- second column -->


</div><!-- wrapper -->

</body>
</html>

