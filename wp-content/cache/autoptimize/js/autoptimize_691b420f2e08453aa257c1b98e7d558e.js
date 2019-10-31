(function(){var isIe=/(trident|msie)/i.test(navigator.userAgent);if(isIe&&document.getElementById&&window.addEventListener){window.addEventListener('hashchange',function(){var id=location.hash.substring(1),element;if(!(/^[A-z0-9_-]+$/.test(id))){return;}
element=document.getElementById(id);if(element){if(!(/^(?:a|select|input|button|textarea)$/i.test(element.tagName))){element.tabIndex=-1;}
element.focus();}},false);}})();
(function(){function debounce(func,wait,immediate){'use strict';var timeout;wait=(typeof wait!=='undefined')?wait:20;immediate=(typeof immediate!=='undefined')?immediate:true;return function(){var context=this,args=arguments;var later=function(){timeout=null;if(!immediate){func.apply(context,args);}};var callNow=immediate&&!timeout;clearTimeout(timeout);timeout=setTimeout(later,wait);if(callNow){func.apply(context,args);}};}
function prependElement(container,element){if(container.firstChild.nextSibling){return container.insertBefore(element,container.firstChild.nextSibling);}else{return container.appendChild(element);}}
function showButton(element){element.className=element.className.replace('is-empty','');}
function hideButton(element){if(!element.classList.contains('is-empty')){element.className+=' is-empty';}}
function getAvailableSpace(button,container){return container.offsetWidth-button.offsetWidth-22;}
function isOverflowingNavivation(list,button,container){return list.offsetWidth>getAvailableSpace(button,container);}
var navContainer=document.querySelector('.main-navigation');var breaks=[];if(!navContainer){return;}
function updateNavigationMenu(container){if(!container.parentNode.querySelector('.main-menu[id]')){return;}
var visibleList=container.parentNode.querySelector('.main-menu[id]');var hiddenList=visibleList.parentNode.nextElementSibling.querySelector('.hidden-links');var toggleButton=visibleList.parentNode.nextElementSibling.querySelector('.main-menu-more-toggle');if(isOverflowingNavivation(visibleList,toggleButton,container)){breaks.push(visibleList.offsetWidth);prependElement(hiddenList,!visibleList.lastChild||null===visibleList.lastChild?visibleList.previousElementSibling:visibleList.lastChild);showButton(toggleButton);}else{if(getAvailableSpace(toggleButton,container)>breaks[breaks.length-1]){visibleList.appendChild(hiddenList.firstChild.nextSibling);breaks.pop();}
if(breaks.length<2){hideButton(toggleButton);}}
if(isOverflowingNavivation(visibleList,toggleButton,container)){updateNavigationMenu(container);}}
document.addEventListener('DOMContentLoaded',function(){updateNavigationMenu(navContainer);var hasSelectiveRefresh=('undefined'!==typeof wp&&wp.customize&&wp.customize.selectiveRefresh&&wp.customize.navMenusPreview.NavMenuInstancePartial);if(hasSelectiveRefresh){wp.customize.selectiveRefresh.bind('partial-content-rendered',function(placement){var isNewNavMenu=(placement&&placement.partial.id.includes('nav_menu_instance')&&'null'!==placement.container[0].parentNode&&placement.container[0].parentNode.classList.contains('main-navigation'));if(isNewNavMenu){updateNavigationMenu(placement.container[0].parentNode);}});}});window.addEventListener('load',function(){updateNavigationMenu(navContainer);});var isResizing=false;window.addEventListener('resize',debounce(function(){if(isResizing){return;}
isResizing=true;setTimeout(function(){updateNavigationMenu(navContainer);isResizing=false;},150);}));updateNavigationMenu(navContainer);})();
(function(){function debounce(func,wait,immediate){'use strict';var timeout;wait=(typeof wait!=='undefined')?wait:20;immediate=(typeof immediate!=='undefined')?immediate:true;return function(){var context=this,args=arguments;var later=function(){timeout=null;if(!immediate){func.apply(context,args);}};var callNow=immediate&&!timeout;clearTimeout(timeout);timeout=setTimeout(later,wait);if(callNow){func.apply(context,args);}};}
function addClass(el,cls){if(!el.className.match('(?:^|\\s)'+cls+'(?!\\S)')){el.className+=' '+cls;}}
function deleteClass(el,cls){el.className=el.className.replace(new RegExp('(?:^|\\s)'+cls+'(?!\\S)'),'');}
function hasClass(el,cls){if(el.className.match('(?:^|\\s)'+cls+'(?!\\S)')){return true;}}
function toggleAriaExpandedState(ariaItem){'use strict';var ariaState=ariaItem.getAttribute('aria-expanded');if(ariaState==='true'){ariaState='false';}else{ariaState='true';}
ariaItem.setAttribute('aria-expanded',ariaState);}
function openSubMenu(currentSubMenu){'use strict';currentSubMenu.parentElement.className+=' off-canvas';currentSubMenu.parentElement.lastElementChild.className+=' expanded-true';toggleAriaExpandedState(currentSubMenu.previousSibling);}
function closeSubMenu(currentSubMenu){'use strict';var menuItem=getCurrentParent(currentSubMenu,'.menu-item');var menuItemAria=menuItem.querySelector('a[aria-expanded]');var subMenu=currentSubMenu.closest('.sub-menu');if(getCurrentParent(currentSubMenu,'ul').classList.contains('sub-menu')){menuItem.className=menuItem.className.replace('off-canvas','');subMenu.className=subMenu.className.replace('expanded-true','');toggleAriaExpandedState(menuItemAria);}else{menuItem.className=menuItem.className.replace('off-canvas','');menuItem.lastElementChild.className=menuItem.lastElementChild.className.replace('expanded-true','');toggleAriaExpandedState(menuItemAria);}}
function getCurrentParent(child,selector,stopSelector){var currentParent=null;while(child){if(child.matches(selector)){currentParent=child;break;}else if(stopSelector&&child.matches(stopSelector)){break;}
child=child.parentElement;}
return currentParent;}
function removeAllFocusStates(){'use strict';var siteBranding=document.getElementsByClassName('site-branding')[0];var getFocusedElements=siteBranding.querySelectorAll(':hover, :focus, :focus-within');var getFocusedClassElements=siteBranding.querySelectorAll('.is-focused');var i;var o;for(i=0;i<getFocusedElements.length;i++){getFocusedElements[i].blur();}
for(o=0;o<getFocusedClassElements.length;o++){deleteClass(getFocusedClassElements[o],'is-focused');}}
if(!Element.prototype.matches){Element.prototype.matches=Element.prototype.msMatchesSelector;}
function toggleSubmenuDisplay(){document.addEventListener('touchstart',function(event){if(event.target.matches('a')){var url=event.target.getAttribute('href')?event.target.getAttribute('href'):'';if('#'!==url&&''!==url){window.location=url;}else if('#'===url&&event.target.nextSibling.matches('.submenu-expand')){openSubMenu(event.target);}else{event.preventDefault();}}
if(event.target.matches('.submenu-expand')){openSubMenu(event.target);}else if(null!=getCurrentParent(event.target,'.submenu-expand')&&getCurrentParent(event.target,'.submenu-expand').matches('.submenu-expand')){openSubMenu(getCurrentParent(event.target,'.submenu-expand'));}else if(event.target.matches('.menu-item-link-return')){closeSubMenu(event.target);}else if(null!=getCurrentParent(event.target,'.menu-item-link-return')&&getCurrentParent(event.target,'.menu-item-link-return').matches('.menu-item-link-return')){closeSubMenu(event.target);}
removeAllFocusStates();},false);document.addEventListener('touchend',function(event){var mainNav=getCurrentParent(event.target,'.main-navigation');if(null!=mainNav&&hasClass(mainNav,'.main-navigation')){event.preventDefault();}else if(event.target.matches('.submenu-expand')||null!=getCurrentParent(event.target,'.submenu-expand')&&getCurrentParent(event.target,'.submenu-expand').matches('.submenu-expand')||event.target.matches('.menu-item-link-return')||null!=getCurrentParent(event.target,'.menu-item-link-return')&&getCurrentParent(event.target,'.menu-item-link-return').matches('.menu-item-link-return')){event.preventDefault();}
removeAllFocusStates();},false);document.addEventListener('focus',function(event){if(event.target.matches('.main-navigation > div > ul > li a')){var currentDiv=getCurrentParent(event.target,'div','.main-navigation');var currentDivSibling=currentDiv.previousElementSibling===null?currentDiv.nextElementSibling:currentDiv.previousElementSibling;var focusedElement=currentDivSibling.querySelector('.is-focused');var focusedClass='is-focused';var prevLi=getCurrentParent(event.target,'.main-navigation > div > ul > li','.main-navigation').previousElementSibling;var nextLi=getCurrentParent(event.target,'.main-navigation > div > ul > li','.main-navigation').nextElementSibling;if(null!==focusedElement&&null!==hasClass(focusedElement,focusedClass)){deleteClass(focusedElement,focusedClass);}
if(getCurrentParent(event.target,'.main-navigation > div > ul > li','.main-navigation')){addClass(getCurrentParent(event.target,'.main-navigation > div > ul > li','.main-navigation'),focusedClass);}
if(prevLi&&hasClass(prevLi,focusedClass)){deleteClass(prevLi,focusedClass);}
if(nextLi&&hasClass(nextLi,focusedClass)){deleteClass(nextLi,focusedClass);}}},true);document.addEventListener('click',function(event){if(event.target!==document.getElementsByClassName('site-branding')[0]){removeAllFocusStates();}else{}},false);}
document.addEventListener('DOMContentLoaded',function(){toggleSubmenuDisplay();});document.addEventListener('customize-preview-menu-refreshed',function(e,params){if('menu-1'===params.wpNavMenuArgs.theme_location){toggleSubmenuDisplay();}});var isResizing=false;window.addEventListener('resize',function(){isResizing=true;debounce(function(){if(isResizing){return;}
toggleSubmenuDisplay();isResizing=false;},150);});})();
!function(a,b){"use strict";function c(){if(!e){e=!0;var a,c,d,f,g=-1!==navigator.appVersion.indexOf("MSIE 10"),h=!!navigator.userAgent.match(/Trident.*rv:11\./),i=b.querySelectorAll("iframe.wp-embedded-content");for(c=0;c<i.length;c++){if(d=i[c],!d.getAttribute("data-secret"))f=Math.random().toString(36).substr(2,10),d.src+="#?secret="+f,d.setAttribute("data-secret",f);if(g||h)a=d.cloneNode(!0),a.removeAttribute("security"),d.parentNode.replaceChild(a,d)}}}var d=!1,e=!1;if(b.querySelector)if(a.addEventListener)d=!0;if(a.wp=a.wp||{},!a.wp.receiveEmbedMessage)if(a.wp.receiveEmbedMessage=function(c){var d=c.data;if(d)if(d.secret||d.message||d.value)if(!/[^a-zA-Z0-9]/.test(d.secret)){var e,f,g,h,i,j=b.querySelectorAll('iframe[data-secret="'+d.secret+'"]'),k=b.querySelectorAll('blockquote[data-secret="'+d.secret+'"]');for(e=0;e<k.length;e++)k[e].style.display="none";for(e=0;e<j.length;e++)if(f=j[e],c.source===f.contentWindow){if(f.removeAttribute("style"),"height"===d.message){if(g=parseInt(d.value,10),g>1e3)g=1e3;else if(~~g<200)g=200;f.height=g}if("link"===d.message)if(h=b.createElement("a"),i=b.createElement("a"),h.href=f.getAttribute("src"),i.href=d.value,i.host===h.host)if(b.activeElement===f)a.top.location.href=d.value}else;}},d)a.addEventListener("message",a.wp.receiveEmbedMessage,!1),b.addEventListener("DOMContentLoaded",c,!1),a.addEventListener("load",c,!1)}(window,document);