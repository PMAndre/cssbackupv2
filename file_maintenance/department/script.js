/* sub button down and up */
        // JavaScript code to toggle visibility of sublinks and subbuttonlinks
        document.addEventListener('DOMContentLoaded', function() {
            var sublinks = document.querySelectorAll('.sublink');

            // Add click event listener to each sublink
            sublinks.forEach(function(sublink) {
                sublink.addEventListener('click', function(event) {
                    event.stopPropagation(); // Prevent click event from propagating to parent elements


                    // Toggle the class "show-subbuttonlinks" on the clicked sublink
                    this.classList.toggle('show-subbuttonlinks');
                });
            });

            var mainLinks = document.querySelectorAll('.main-link');

            // Add click event listener to each main link
            mainLinks.forEach(function(link) {
                link.addEventListener('click', function() {
                    // Toggle the class "show-sublinks" on the clicked main link
                    this.classList.toggle('show-sublinks');

                    // Find the sublink under the clicked main link and toggle its visibility
                    var sublink = this.querySelector('.sublink');
                    if (sublink) {
                        sublink.classList.toggle('show-sublinks');
                    }
                });
            });
        });

/* darkmode, logout and side nav close open button */
const body = document.querySelector("body"),
modeToggle = body.querySelector(".mode-toggle");
sidebar = body.querySelector("nav");
sidebarToggle = body.querySelector(".sidebar-toggle");

let getMode = localStorage.getItem("mode");
if(getMode && getMode ==="dark"){
    body.classList.toggle("dark");
}
let getStatus = localStorage.getItem("status");
if(getStatus && getStatus ==="close"){
    sidebar.classList.toggle("close");
}
modeToggle.addEventListener("click", () =>{
    body.classList.toggle("dark");
    if(body.classList.contains("dark")){
        localStorage.setItem("mode", "dark");
    }else{
        localStorage.setItem("mode", "light");
    }
});
sidebarToggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
    if(sidebar.classList.contains("close")){
        localStorage.setItem("status", "close");
    }else{
        localStorage.setItem("status", "open");
    }
})
function menuToggle(){
    const toggleMenu = document.querySelector('.logout');
    toggleMenu.classList.toggle('active')
}

// SIDE NAV ARROW ANIMATION
var arrow = document.querySelector('.rotate');

// Add a click event listener
arrow.addEventListener("click", function() {
  // Toggle the 'rotated' class on click
  arrow.classList.toggle("rotated");
});

// filtering search box
/*
function myFunction() {
    // Declare variables
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName('td');
  
    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
      a = li[i].getElementsByTagName("a")[0];
      txtValue = a.textContent || a.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        li[i].style.display = "";
      } else {
        li[i].style.display = "none";
      }
    }
  }
  */

  // Implementation in ES6
function pagination(c, m) {
    var current = c,
        last = m,
        delta = 2,
        left = current - delta,
        right = current + delta + 1,
        range = [],
        rangeWithDots = [],
        l;

    for (let i = 1; i <= last; i++) {
        if (i == 1 || i == last || i >= left && i < right) {
            range.push(i);
        }
    }

    for (let i of range) {
        if (l) {
            if (i - l === 2) {
                rangeWithDots.push(l + 1);
            } else if (i - l !== 1) {
                rangeWithDots.push('...');
            }
        }
        rangeWithDots.push(i);
        l = i;
    }

    return rangeWithDots;
}

