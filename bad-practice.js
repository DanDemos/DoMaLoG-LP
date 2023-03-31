$(document).ready(function() {
  // Phone
  if (window.innerWidth <= 575) {
    document.querySelectorAll('.show-on-phone').forEach(function(element) {
      element.hidden = false;
    });
    document.querySelectorAll('.show-on-tablet, .show-on-desktop').forEach(function(element) {
      element.hidden = true;
    });
    document.querySelectorAll('.show-on-phone.show-on-tablet').forEach(function(element) {
      if (window.innerWidth >= 576 && window.innerWidth <= 991) {
        element.hidden = false;
      } else {
        element.hidden = true;
      }
    });
    document.querySelectorAll('.show-on-phone.show-on-desktop').forEach(function(element) {
      if (window.innerWidth >= 992) {
        element.hidden = false;
      } else {
        element.hidden = true;
      }
    });
  }
  // Tablet
  if (window.innerWidth >= 576 && window.innerWidth <= 991) {
    document.querySelectorAll('.show-on-tablet').forEach(function(element) {
      element.hidden = false;
    });
    document.querySelectorAll('.show-on-phone, .show-on-desktop').forEach(function(element) {
      element.hidden = true;
    });
    document.querySelectorAll('.show-on-tablet.show-on-phone').forEach(function(element) {
      if (window.innerWidth <= 575) {
        element.hidden = false;
      } else {
        element.hidden = true;
      }
    });
    document.querySelectorAll('.show-on-tablet.show-on-desktop').forEach(function(element) {
      if (window.innerWidth >= 992) {
        element.hidden = false;
      } else {
        element.hidden = true;
      }
    });
  }
  // Desktop
  if (window.innerWidth >= 992) {
    document.querySelectorAll('.show-on-desktop').forEach(function(element) {
      element.hidden = false;
    });
    document.querySelectorAll('.show-on-phone, .show-on-tablet').forEach(function(element) {
      element.hidden = true;
    });
    document.querySelectorAll('.show-on-desktop.show-on-phone').forEach(function(element) {
      if (window.innerWidth <= 575) {
        element.hidden = false;
      } else {
        element.hidden = true;
      }
    });
    document.querySelectorAll('.show-on-desktop.show-on-tablet').forEach(function(element) {
      if (window.innerWidth >= 576 && window.innerWidth <= 991) {
        element.hidden = false;
      } else {
        element.hidden = true;
      }
    });
  }
});