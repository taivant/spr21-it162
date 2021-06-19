<?php include 'includes/header.php';?>  

          <p>Flexbox is a powerful tool if you know how to use it and when to use it! “The Flexible Box Module, usually referred to as flexbox, was designed as a one-dimensional layout model, and as a method that could offer space distribution between items in an interface and powerful alignment capabilities.”(Developer.Mozilla) Below are the instructions on how to use the flexbox.</p> 

          <p>“When working with flexbox you need to think in terms of two axes — the main axis and the cross axis. The main axis is defined by the flex-direction property, and the cross axis runs perpendicular to it. Everything we do with flexbox refers back to these axes, so it is worth understanding how they work from the outset.”(Developer.Mozilla)  After figuring out the axes, you need to find the start and end lines. If you are writing in English and many other LTR languages your start of the line on the main axis will be on the left side and the end of the line on the right side. But if you are using RTL languages like Arabic, Hebrew, Persian, etc. your line on the main axis will start on the right side and end on the left. </p>

          <p>“An area of a document laid out using flexbox is called a flex container. To create a flex container, we set the value of the area's container's display property to flex or inline-flex. As soon as we do this the direct children of that container become flex items.”(Developer.Mozilla) After creating the flex container you can change flex directions by setting the values into row, column, row-reverse and column-reverse. Also, you could create multiple-line containers by setting the flex-wrap to wrap, so if an item is too large for one line it will wrap into another line. But, should you change the value to nowrap, it could potentially overflow if it doesn’t shrink to fit.
          You can combine two flex properties like flex-direction and flex-wrap into the flex-flow shorthand.
          Lastly, there are three other properties you should be aware of, flex-grow, flex-shrink, flex-basis. “The flex-basis is what defines the size of that item in terms of the space it leaves as available space. With the flex-grow property set to a positive integer, flex items can grow along the main axis from their flex-basis. Where the flex-grow property deals with adding space in the main axis, the flex-shrink property controls how it is taken away.” (Developer.Mozilla)</p>

          <p>This may look like a lot to get hang of, but if you try coding with it, it’s much easier and will be very detrimental for you web design! However, we have to check the browser support for flexbox. According to Caniuse.com, IE 6-9, Opera 10-11.5 and Opera mobile 12 version don't support flexbox at all. Further, IE 10-11, Firefox 2-27, Chrome 4-20, Safari 3.1-6, Safari on IOS 3.2-6.1, Android Browser 2.1-4.3 have partial support with prefixes such as webkit, moz and ms. (Caniuse) Another thing you can do for old browsers to support flexbox you could use fallback techniques. First method, you can float blocks of items, then set the display to flex on the container. Next, you could set an inline-box item to flex, which will blockify the item. Another way is to set the display to table-cell, which will create anonymous boxes and you don’t need to wrap items in a wrapper, but if you declare display: flex on the parent item, it will become flex item losing it’s table display features.(Developer.Mozilla)</p>

          
    </section>


      <aside>
        <h3>Works cited</h3>
         <dl>
             <dt>Citation One</dt>
             <dd><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox" target="_blank">Basic Concepts of Flexbox - Css: Cascading Style Sheets: Mdn. developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox.</a></dd>
         </dl>
         <dl>
             <dt>Citation Two</dt>
             <dd><a href="https://caniuse.com/flexbox" target="_blank">Can I Use... Support Tables for HTML5, CSS3, Etc, caniuse.com/flexbox. </a></dd>
         </dl>
         <dl>
             <dt>Citation Three</dt>
             <dd><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Backwards_Compatibility_of_Flexbox" target="_blank">“Backwards Compatibility of Flexbox - CSS: Cascading Style Sheets: MDN.” CSS: Cascading Style Sheets | MDN, developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Backwards_Compatibility_of_Flexbox. </a></dd>
         </dl>
      </aside>
    
<?php include 'includes/footer.php';?>