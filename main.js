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
  if (name === 'phone') {
    showOnPhone?.forEach(showOnPhone_element => {
      const shouldShow = matches || (showOnPhone_element.classList.contains('show-on-tablet') && window.matchMedia(mediaQueries[1].query).matches);
      showOnPhone_element.hidden = !shouldShow;
    });
  } else if (name === 'tablet') {
    showOnTablet?.forEach(showOnTablet_element => {
      const shouldShow = matches || (showOnTablet_element.classList.contains('show-on-phone') && window.matchMedia(mediaQueries[0].query).matches) || (showOnTablet_element.classList.contains('show-on-desktop') && window.matchMedia(mediaQueries[2].query).matches);
      showOnTablet_element.hidden = !shouldShow;
    });
  } else if (name === 'desktop') {
    showOnDesktop?.forEach(showOnDesktop_element => {
      const shouldShow = matches || (showOnDesktop_element.classList.contains('show-on-tablet') && window.matchMedia(mediaQueries[1].query).matches) || (showOnDesktop_element.classList.contains('show-on-phone') && window.matchMedia(mediaQueries[0].query).matches);
      showOnDesktop_element.hidden = !shouldShow;
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