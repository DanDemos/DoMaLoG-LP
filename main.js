$(document).ready(function(){
  $("#menu-btn-close").click(function(){
    $(this).parent().parent().hide();

  }); 
  $("#menu-btn-open").click(function(){
    $(this).next().show();

  }); 
})

const mediaQueries = [
  { name: 'phone', query: '(max-width: 575px)' },
  { name: 'tablet', query: '(min-width: 576px) and (max-width: 991px)' },
  { name: 'desktop', query: '(min-width: 992px)' },
];

const showOnPhone = document.querySelectorAll('.show-on-phone');
const showOnTablet = document.querySelectorAll('.show-on-tablet');
const showOnDesktop = document.querySelectorAll('.show-on-desktop');

const handleMediaQueryChange = ({ name, matches }) => {
  if (name === 'phone' && showOnPhone) {
    showOnPhone.forEach(showOnPhone_element => {
      matches ? showOnPhone_element.hidden = false : showOnPhone_element.hidden = true;
    });
  } else if (name === 'tablet' && showOnTablet) {
    showOnTablet.forEach(showOnTablet_element => {
      matches ? showOnTablet_element.hidden = false : showOnTablet_element.hidden = true;
    });
  } else if (name === 'desktop' && showOnDesktop) {
    console.log(matches)
    showOnDesktop.forEach(showOnDesktop_element => {
      matches ? showOnDesktop_element.hidden = false : showOnDesktop_element.hidden = true;
    });
  }
  console.log(`${name} is ${matches ? 'active' : 'inactive'}`);
};

mediaQueries.forEach(({ name, query }) => {
  const mediaQuery = window.matchMedia(query);
  handleMediaQueryChange({ name, matches: mediaQuery.matches });
  mediaQuery.addEventListener('change', () => {
    handleMediaQueryChange({ name, matches: mediaQuery.matches });
  });
});

