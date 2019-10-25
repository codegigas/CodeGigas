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

    <div id="cpp_iterators">
      <h1>Iterators</h1> 
      <h2>Iterator Definition</h2>
      <p>STL Iterators are things that know how to traverse a container. Iterators are used to point at the memory addresses of STL containers. They are primarily used in sequence of numbers, characters etc. They reduce the complexity and execution time of program.</p>
      <p><b>operator++</b> - moves iterator to the next element</p>
      <p><b>operator*</b> - accesses the element</p>
      <p><b>operator-></b> - same as operator. on the element</p>
      <h2>Vector Declaration</h2>
      <p>The syntax</p>
      <code code-include="/code/cpp/vector/01_vectorDeclaration.txt"></code>

      <h2>Vector Iterator</h2>
      <table class="code_table">
        <tr>
            <th>Input</th>
            <th>Output</th>
        </tr>
        <tr>
            <td>Hello, World!</td>
            <td>Hello has size: 5</td>
        </tr>
        <tr>
            <td></td>           
            <td>,  has size: 2</td>
        </tr>
        <tr>
            <td></td>           
            <td>World! has size: 6</td>
        </tr>
      </table>
      <br>
      <code code-include="/code/cpp/iterators/vector_iterator.cpp"></code>
    
    </div> <!-- END CPP_STRINGs_AND_STREAMS-->
     
  </div>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/footer.php") ?>