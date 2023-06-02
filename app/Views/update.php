<html>
    <head>
        <title>
            Update Land Details
        </title>
        <link rel="stylesheet" href="/assets/css/update.css">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    </head>
    <body>
        <Header>
            <div class="navbar">
            <img src="/assets/images/icon2.png" class="logo">
                <ul>
                    <li><a href="/adminhome">Home</a></li>
                    <li><a href="/adminabout">About</a></li>
                    <li><a href="/adminmap">Virtual Map</a></li>
                    <li><a href="/adminsearch">Search Land</a></li>
                    <li><a href="/documents">Land Documents</a></li>
                    <li><a href="/reports">Reports</a></li>
                    <li><a href="/profile">
                        <img src="/assets/images/user.png" alt="Profile" class="user">
                      </a>
                        <ul class="dropdown">
                            <li><a href="/" onclick="logout()">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </Header>
            
        <div class="wrapper" style="background-color: 0054A5;">
            <h1>Update Land Details</h1>
            <div class="form-container">
                <form action="/land/update/<?= $lotId ?>" method="post">
                    <div class="form-group">
                        <label for="lot_no">Lot No.:</label>
                        <input type="text" id="lot_no" name="lot_no" value="<?= set_value('lot_no', isset($lot['lot_no']) ? $lot['lot_no'] : '') ?>">
                    </div>     
                    <div class="form-group">
                        <label for="size_of_area">Size of Area:</label>
                        <input type="text" id="size_of_area" name="size_of_area" value="<?= set_value('size_of_area', isset($lot['size_of_area']) ? $lot['size_of_area'] : '') ?>">
                    </div>
                    <div class="form-group">
                        <label for="cad_no">Cad No.:</label>
                        <input type="text" id="cad_no" name="cad_no" value="<?= set_value('cad_no', isset($lot['cad_no']) ? $lot['cad_no'] : '') ?>">
                    </div>
                    <div class="form-group">
                        <label for="location">Location:</label>
                        <input type="text" id="location" name="location" value="<?= set_value('location', isset($lot['location']) ? $lot['location'] : '') ?>">
                    </div>
                    <div class="form-group">
                        <label for="phase">Phase:</label>
                        <input type="text" id="phase" name="phase" value="<?= set_value('phase', isset($lot['phase']) ? $lot['phase'] : '') ?>">
                    </div>
                    <div class="form-group">
                        <label for="land_owner">Land Owner:</label>
                        <input type="text" id="land_owner" name="land_owner" value="<?= set_value('land_owner', isset($lot['land_owner']) ? $lot['land_owner'] : '') ?>">
                    </div>
                    <div class="form-group">
                        <label for="status">Status:</label>
                        <input type="text" id="status" name="status" value="<?= set_value('status', isset($lot['status']) ? $lot['status'] : '') ?>">
                    </div>
                    <!-- Update the form inputs for distances -->
                    <div class="divider">
                        <h2>Distance</h2>
                    </div>
                    <div id="distanceContainer">
                        <?php foreach ($propertyDistance as $index => $distance): ?>
                            <input type="hidden" name="propertyDistances[<?= $index ?>][id]" value="<?= $distance['id'] ?>">
                            <div class="form-group">
                                <label for="bllm<?= $index ?>">BLLM:</label>
                                <input type="text" id="bllm<?= $index ?>" name="propertyDistances[<?= $index ?>][bllm]" value="<?= set_value('propertyDistances['.$index.'][bllm]', $distance['bllm']) ?>">
                            </div>
                            <div class="form-group">
                                <label for="distance_to_point1<?= $index ?>">Distance to Point 1:</label>
                                <input type="text" id="distance_to_point1<?= $index ?>" name="propertyDistances[<?= $index ?>][distance_to_point1]" value="<?= set_value('propertyDistances['.$index.'][distance_to_point1]', $distance['distance_to_point1']) ?>">
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <button id="initialDistanceButton" type="button">Add more Distance</button>

    
                    <!-- Update the form inputs for valuations -->
                    <div class="divider">
                        <h2>Valuation</h2>
                    </div>
                    <div id="valuationContainer">
                    <?php foreach ($propertyValuation as $index => $valuation): ?>
                        <input type="hidden" name="propertyValuations[<?= $index ?>][id]" value="<?= $valuation['id'] ?>">
                        <div class="form-group">
                            <label for="valuation_amount<?= $index ?>">Lot Valuation Amount:</label>
                            <input type="text" id="valuation_amount<?= $index ?>" name="propertyValuations[<?= $index ?>][valuation_amount]" value="<?= set_value('propertyValuations['.$index.'][valuation_amount]', $valuation['valuation_amount']) ?>">
                        </div>
                        <div class="form-group">
                            <label for="tree_valuation_amount<?= $index ?>">Tree Valuation Amount:</label>
                            <input type="text" id="tree_valuation_amount<?= $index ?>" name="propertyValuations[<?= $index ?>][tree_valuation_amount]" value="<?= set_value('propertyValuations['.$index.'][tree_valuation_amount]', $valuation['tree_valuation_amount']) ?>">
                        </div>
                        <div class="form-group">
                            <label for="disturbance_amount<?= $index ?>">Disturbance Amount:</label>
                            <input type="text" id="disturbance_amount<?= $index ?>" name="propertyValuations[<?= $index ?>][disturbance_amount]" value="<?= set_value('propertyValuations['.$index.'][disturbance_amount]', $valuation['disturbance_amount']) ?>">
                        </div>
                        <div class="form-group">
                            <label for="house_structure_amount<?= $index ?>">House Structure Amount:</label>
                            <input type="text" id="house_structure_amount<?= $index ?>" name="propertyValuations[<?= $index ?>][house_structure_amount]" value="<?= set_value('propertyValuations['.$index.'][house_structure_amount]', $valuation['house_structure_amount']) ?>">
                        </div>
                    <?php endforeach; ?>
                    </div>
                    <button id="initialValuationButton" type="button">Add more Valuation</button>
    
    
                    <div class="submit-container">
                        <button type="submit">Submit</button>
                    </div>
    
    
                </form>
            </div>

        </div>

        <script>
  var initialDistanceContainer = null;
  var previousDistanceContainer = null;
  var initialValuationContainer = null;
  var previousValuationContainer = null;
  var distanceCount = 1;
  var valuationCount = 1;

  function addMoreDistance() {
    var container = document.createElement('div');
    container.className = 'added-fields-container';

    var heading = document.createElement('h2');
    heading.textContent = 'Distance';

    var input1 = document.createElement('input');
    input1.type = 'text';
    input1.name = `distance[${distanceCount}][bllm]`; // Changed to an array name
    input1.placeholder = 'BLLM :';
    input1.className = 'added-field';

    var input2 = document.createElement('input');
    input2.type = 'text';
    input2.name = `distance[${distanceCount}][distance_to_point1]`; // Changed to an array name
    input2.placeholder = 'Distance to Point 1 :';
    input2.className = 'added-field';

    container.appendChild(heading);
    container.appendChild(input1);
    container.appendChild(input2);

    var distanceContainer = document.getElementById('distanceContainer');
    distanceContainer.appendChild(container);

    var functionButton = document.createElement('button');
    functionButton.type = 'button';
    functionButton.textContent = 'Add more Distance';
    functionButton.onclick = addMoreDistance;
    functionButton.className = 'function-button';

    container.appendChild(functionButton);

    // Remove the function button from the previous container
    if (previousDistanceContainer) {
      var previousFunctionButton = previousDistanceContainer.querySelector('.function-button');
      if (previousFunctionButton) {
        previousFunctionButton.remove();
      }
    }

    distanceCount++;

    // Remove the function button from the initial container
    if (initialDistanceContainer === null) {
      initialDistanceContainer = container;
    } else {
      var initialFunctionButton = initialDistanceContainer.querySelector('.function-button');
      if (initialFunctionButton) {
        initialFunctionButton.remove();
      }
    }

    previousDistanceContainer = container;

    // Hide the button in the parent input field
    var parentFunctionButton = this;
    parentFunctionButton.style.display = 'none';
  }

  function addMoreValuation() {
    var container = document.createElement('div');
    container.className = 'added-fields-container';

    var heading = document.createElement('h2');
    heading.textContent = 'Valuation';

    var input1 = document.createElement('input');
    input1.type = 'text';
    input1.name = `valuation[${valuationCount}][valuation_amount]`; // Changed to an array name
    input1.placeholder = 'Lot Valuation Amount :';
    input1.className = 'added-field';

    var input2 = document.createElement('input');
    input2.type = 'text';
    input2.name = `valuation[${valuationCount}][tree_valuation_amount]`; // Changed to an array name
    input2.placeholder = 'Tree Valuation Amount :';
    input2.className = 'added-field';

    var input3 = document.createElement('input');
    input3.type = 'text';
    input3.name = `valuation[${valuationCount}][disturbance_amount]`; // Changed to an array name
    input3.placeholder = 'Disturbance Amount :';
    input3.className = 'added-field';

    var input4 = document.createElement('input');
    input4.type = 'text';
    input4.name = `valuation[${valuationCount}][house_structure_amount]`; // Changed to an array name
    input4.placeholder = 'House Structure Amount :';
    input4.className = 'added-field';

    container.appendChild(heading);
    container.appendChild(input1);
    container.appendChild(input2);
    container.appendChild(input3);
    container.appendChild(input4);

    var valuationContainer = document.getElementById('valuationContainer');
    valuationContainer.appendChild(container);

    var functionButton = document.createElement('button');
    functionButton.type = 'button';
    functionButton.textContent = 'Add more Valuation';
    functionButton.onclick = addMoreValuation;
    functionButton.className = 'function-button';

    container.appendChild(functionButton);

    // Remove the function button from the previous container
    if (previousValuationContainer) {
      var previousFunctionButton = previousValuationContainer.querySelector('.function-button');
      if (previousFunctionButton) {
        previousFunctionButton.remove();
      }
    }

    valuationCount++;

    // Remove the function button from the initial container
    if (initialValuationContainer === null) {
      initialValuationContainer = container;
    } else {
      var initialFunctionButton = initialValuationContainer.querySelector('.function-button');
      if (initialFunctionButton) {
        initialFunctionButton.remove();
      }
    }

    previousValuationContainer = container;

    // Hide the button in the parent input field
    var parentFunctionButton = this;
    parentFunctionButton.style.display = 'none';
  }

  // Add event listeners to the initial function buttons
  window.addEventListener('DOMContentLoaded', function () {
    var initialDistanceButton = document.getElementById('initialDistanceButton');
    initialDistanceButton.addEventListener('click', addMoreDistance);

    var initialValuationButton = document.getElementById('initialValuationButton');
    initialValuationButton.addEventListener('click', addMoreValuation);
  });
</script>

        
    </body>
