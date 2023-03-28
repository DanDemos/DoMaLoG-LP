$(document).ready(function () {
  $("#menu-btn-close").click(function () {
    $(this).parent().parent().hide();
    $("#blackscreen").hide();
  });
  $("#menu-btn-open").click(function () {
    $(this).next().show();
    $("#blackscreen").show();
  });
})

const mediaQueries = [
  { name: 'phone', query: '(max-width: 575px)' },
  { name: 'tablet', query: '(min-width: 576px) and (max-width: 991px)' },
  { name: 'desktop', query: '(min-width: 992px)' },
];

const handleMediaQueryChange = () => {
  const elementsBySize = [
    { size: 'phone', elements: document.querySelectorAll('.show-on-phone') },
    { size: 'tablet', elements: document.querySelectorAll('.show-on-tablet') },
    { size: 'desktop', elements: document.querySelectorAll('.show-on-desktop') }
  ];

  elementsBySize.forEach(({ size, elements }) => {
    const otherSizes = elementsBySize.filter(s => s.size !== size);
    elements?.forEach(element => {
      const shouldShow = window.matchMedia(mediaQueries.find(q => q.name === size).query).matches || otherSizes.some(s => element.classList.contains(`show-on-${s.size}`) && window.matchMedia(mediaQueries.find(q => q.name === s.size).query).matches);
      element.hidden = !shouldShow;
    });
  });
};

mediaQueries.forEach(({ query }) => {
  const mediaQuery = window.matchMedia(query);
  handleMediaQueryChange();
  mediaQuery.addEventListener('change', handleMediaQueryChange);
});

const elements = document.querySelectorAll('.typing-effect');

elements.forEach(element => {
  const original = element.innerHTML;
  element.innerHTML = '';

  var abc = original.split('<br>');
  console.log(abc);

  new TypeIt(element, {
    strings: abc,
    speed: 75,
    loop: false,
  }).go();
});




