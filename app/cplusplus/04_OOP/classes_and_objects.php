<?php include($_SERVER['DOCUMENT_ROOT'] . "/header.php") ?>

<div id="cpp_grid">
  <div id="cpp_sidebar">
    <div class="sidebarButton">Introduction</div>
    <div class="sidebarButton">Data Types</div>
    <div class="sidebarButton">Variables</div>
    <div class="cpp_sidebar_h1">Solutions</div>
    <div class="cpp_sidebar_h2">Algebra</div>
    <div>Quadratic Equation</div>
    <div>Greatest Common Divisor</div>
  </div>
  <div class="cpp_main">

    <div id="cpp_classes_and_objects">
      <h1>Classes and Objects</h1> 
      <h2>Class and Object Definition</h2>
      <p><b>Class</b> is a user defined data type, which holds its own data members and member functions, which can be accessed and used by creating an instance of that class. A class is like a blueprint for an object.</p>
      <p><b>Object</b> is an instance of a Class. When a class is defined, no memory is allocated but when it is instantiated (i.e. an object is created) memory is allocated.</p>

      <h2>Defining Class and Declaring Object</h2>
      <p>The syntax</p>
      <code code-include="/code/cpp/04_OOP/classes_and_objects/01_definingClassAndDeclaringObject.txt"></code>

      <h2>Read Int Vector</h2>
      <table class="code_table">
        <tr>
            <th>Input</th>
            <th>Output</th>
        </tr>
        <tr>
            <td>5</td>
            <td>1 2 3 4 5</td>
        </tr>
        <tr>
            <td>1 2 3 4 5</td>
            <td></td>
        </tr>
      </table>
      <br>
      <code code-include="/code/cpp/containers/vector/readIntVector.cpp"></code>

    </div> <!-- END cpp_classes_and_objects -->

  </div>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/footer.php") ?>