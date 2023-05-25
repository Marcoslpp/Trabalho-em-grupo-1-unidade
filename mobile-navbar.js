const menuSlide = () => {
	const menuIcon = document.querySelector(".MenuIcon");
	const navLinks = document.querySelector(".NavLinks");
	const navLinksInner = document.querySelectorAll(".NavLinks li");
  
	if (!menuIcon || !navLinks || navLinksInner.length === 0) {
	  console.error("Element(s) not found!");
	  return;
	}
  
	menuIcon.addEventListener("click", () => {
	  navLinks.classList.toggle("menu-active");
  
	  navLinksInner.forEach((li, index) => {
		if (li.style.animation) {
		  li.style.animation = "";
		} else {
		  li.style.animation = `navLinkAnime 0.5s ease forwards ${index / 7 + 0.3}s`;
		}
	  });
  
	  menuIcon.classList.toggle("span-anime");
	});
  };
  
  menuSlide();
  