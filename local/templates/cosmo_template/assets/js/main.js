{
    AOS.init();
}

{
    //sliders
    const mainSlider = new Swiper('#mainSlider', {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 50,
        effect: "fade",
        autoplay: {
            delay: 5000,
            disableOnInteraction: false
        },
        navigation: {
            nextEl: '.main-banner-btn-next',
            prevEl: '.main-banner-btn-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },
        breakpoints: {
            0: {
                speed: 600,
            },
            992: {
                speed: 400,
            }
        }
    });

    const mainCardsSlider = new Swiper('.main-projects-slider', {
        spaceBetween: 24,
        breakpoints: {
            0: {
                slidesPerView: 1.1,
                speed: 600,
            },
            992: {
                slidesPerView: 1.5,
                speed: 400,
            }
        }
    })

    const productSlider = new Swiper('#productSlider', {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 50,
        navigation: {
            nextEl: '.product-banner-btn-next',
            prevEl: '.product-banner-btn-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },
        breakpoints: {
            0: {
                speed: 600,
            },
            992: {
                speed: 400,
            }
        }
    });

    const productFullscreenBtn = document.querySelector('.product-banner-fullscreen');
    const productFullscreenWrapper = document.querySelector('.product-banner-wrapper');

    if (productFullscreenBtn) {
        productFullscreenBtn.addEventListener('click', function() {
            productFullscreenWrapper.classList.toggle('active')
            document.querySelector('body').classList.toggle('hidden')
        })
    }

    const gallerySlider = new Swiper(".mySwiper", {
        loop: false,
        freeMode: true,
        watchSlidesProgress: true,
        navigation: {
            nextEl: ".product-gallery-slider-next",
            prevEl: ".product-gallery-slider-prev",
        },
        breakpoints: {
            0: {
                spaceBetween: 10,
                slidesPerView: 3.2,
            },
            992: {
                slidesPerView: 7,
                spaceBetween: 12,
            }
        }
    });

    const gallerySliderThumb = new Swiper(".mySwiper2", {
        loop: false,
        spaceBetween: 10,
        navigation: {
            nextEl: ".product-gallery-slider-thumb-next",
            prevEl: ".product-gallery-slider-thumb-prev",
        },
        thumbs: {
            swiper: gallerySlider,
        },
    });

    //gallery modes
    const galleryBtn = document.querySelectorAll('.product-gallery-btn');
    const slider = document.querySelector('.product-gallery-slider');
    const sliderThumb = document.querySelector('.product-gallery-slider-thumb');
    if (sliderThumb) {
        const sliderThumbWrapper = sliderThumb.querySelector('.product-gallery-slider-wrapper');
        const sliderThumbSlides = sliderThumb.querySelectorAll('.swiper-slide');

        galleryBtn && galleryBtn.forEach(btn => {
            btn.addEventListener('click', function() {
                galleryBtn.forEach(el => {el.classList.remove('active')});
                btn.classList.add('active');
    
                if (btn.classList.contains('slider-mode')) {
                    slider.classList.remove('hide');
                    sliderThumb.classList.remove('hide');
                    sliderThumbWrapper.classList.add('swiper-wrapper');
                    sliderThumbWrapper.classList.remove('product-gallery-slider-thumb-grid');
                    sliderThumbWrapper.classList.remove('product-gallery-slider-thumb-row');
    
                    gallerySliderThumb.init();
                    gallerySliderThumb.enable();
    
                    sliderThumbSlides.forEach(slide => {
                        slide.classList.add('swiper-slide');
                        slide.classList.remove('product-gallery-slider-thumb-slide');
                    });
                }
    
                if (btn.classList.contains('grid-mode')) {
                    slider.classList.add('hide');
                    sliderThumb.classList.add('hide');
                    sliderThumbWrapper.classList.remove('swiper-wrapper');
                    sliderThumbWrapper.classList.add('product-gallery-slider-thumb-grid');
                    sliderThumbWrapper.classList.remove('product-gallery-slider-thumb-row');
    
                    gallerySliderThumb.disable();
                    sliderThumbSlides.forEach(slide => {
                        slide.classList.remove('swiper-slide');
                        slide.classList.add('product-gallery-slider-thumb-slide');
                    });
                }
    
                if (btn.classList.contains('row-mode')) {
                    slider.classList.add('hide');
                    sliderThumb.classList.add('hide');
                    sliderThumbWrapper.classList.remove('swiper-wrapper');
                    sliderThumbWrapper.classList.remove('product-gallery-slider-thumb-grid');
                    sliderThumbWrapper.classList.add('product-gallery-slider-thumb-row');
    
                    gallerySliderThumb.disable();
                    sliderThumbSlides.forEach(slide => {
                        slide.classList.remove('swiper-slide');
                        slide.classList.add('product-gallery-slider-thumb-slide');
                    });
                }
            })
        })
    }
}

{
    //HEADER
    const header = document.querySelector('.header');
    const headerMenu = document.querySelector('.header-menu');

    headerSticky()
    function headerSticky() {
        let scroll = 0;
        window.addEventListener('scroll', function() {
            let top = parseInt(window.scrollY);
            if (top >= 100) {
                header.classList.add('active');
            }
            else {
                header.classList.remove('active');
            }
    
            if (scroll > top) {
                header.classList.remove('hidden');
            } 
            else if (scroll < top) {
                if (window.scrollY > 20) {
                    header.classList.add('hidden');
                }
    
                headerMenu.classList.remove('active');
                document.querySelector('body').classList.remove('lock');
            }
    
            scroll = top;
        });
    }

    //burger
    const openBurgerBtn = document.querySelector('.header-btn');
    const closeBurgerBtns = document.querySelectorAll('.burger-close');
    const burger = document.querySelector('.burger');
    const burgerSubmenus = document.querySelectorAll('.burger-submenu');

    openBurgerBtn.addEventListener('click', function() {
        burger.classList.add('active');
        document.querySelector('body').classList.add('lock');
    })

    closeBurgerBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            burger.classList.remove('active');
            document.querySelector('body').classList.remove('lock');

            burgerSubmenus.forEach(submenu => {
                submenu.classList.remove('active');
            })
        })
    })

    //burger submenu
    const submenuLinks = document.querySelectorAll('.burger-item-level');

    submenuLinks.forEach(el => {
        el.addEventListener('click', function(event) {
            event.preventDefault();
            const submenu = el.parentElement.querySelector('.burger-submenu');
            const closeSubmenuBtn = submenu.querySelector('.burger-submenu-close');
            submenu.classList.add('active');

            closeSubmenuBtn.addEventListener('click', function(event) {
                event.preventDefault();
                submenu.classList.remove('active');
            })
        })
    })

    //header menu 
    const openMenuBtn = document.querySelector('.header-menu-btn');
    const closeMenuBtn = document.querySelector('.header-menu-close');
    const headerMenuBg = document.querySelector('.header-menu-bg');
    const headerMenuItem = document.querySelectorAll('.header-menu-item-name');
    const headerSubmenus = document.querySelectorAll('.header-menu-submenu');
    const headerSubmenuCloseBtn = document.querySelectorAll('.header-menu-submenu-close');

    openMenuBtn.addEventListener('click', function(e) {
        e.preventDefault();
        headerMenu.classList.toggle('active');
        document.querySelector('body').classList.toggle('lock');
    })

    closeMenuBtn.addEventListener('click', function() {
        headerMenu.classList.remove('active');
        document.querySelector('body').classList.remove('lock');

        headerSubmenus.forEach(el => {
            el.classList.remove('active');
        })
    })

    headerMenuBg.addEventListener('click', function() {
        headerMenu.classList.remove('active');
        document.querySelector('body').classList.remove('lock');

        headerSubmenus.forEach(el => {
            el.classList.remove('active');
        })
    })
    
    headerMenuItem.forEach(el => {
        el.addEventListener('mouseover', function() {
            headerMenuItem.forEach(item => {item.parentElement.classList.remove('active')})
            el.parentElement.classList.add('active');
        })

        el.addEventListener('click', function() {
            const submenu = el.parentElement.querySelector('.header-menu-submenu');
            submenu.classList.add('active');
        })
    })

    headerSubmenuCloseBtn.forEach(el => {
        el.addEventListener('click', function() {
            const submenu = el.parentElement;
            submenu.classList.remove('active');
        })
    })
}

{
    //tabs 
    const mainTabs = document.querySelectorAll('.main-content-tab > a');
    const mainItems = document.querySelectorAll('.main-content-item')
    mainTabs.forEach(tab => {
        tab.addEventListener('click', function(e) {
            e.preventDefault();

            mainTabs.forEach(tab => {
                tab.parentElement.classList.remove('active');
            })

            mainItems.forEach(item => {
                item.classList.remove('active');
                item.style.display = 'none';
                item.style.opacity = '0';

                if (item.id.toLocaleLowerCase() === tab.getAttribute('href').slice(1).toLocaleLowerCase()) {
                    item.classList.add('active');
                    item.style.display = 'block';
                    
                    setTimeout(()=>{item.style.opacity = '1';}, 300);
                }
            })

            tab.parentElement.classList.add('active');
        })
    })
}

{
    //modals 
    const modalBtns = document.querySelectorAll('.popup-open');
    const modals = document.querySelectorAll('.popup');

    modalBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            let modalId = btn.dataset.modalId;
            const modalOffer = document.querySelector(`.popup-offer#${modalId}`);
            modalOffer.classList.add('active');
        })
    })

    modals.forEach(modal => {
        const modalBg = modal.querySelector('.popup-background');
        const btnClose = modal.querySelector('.popup-close');

        modalBg.addEventListener('click', function() {
            modal.classList.remove('active');
        })

        btnClose.addEventListener('click', function() {
            modal.classList.remove('active');
        })
    })
}

{
    //selects
    const selects = document.querySelectorAll('.select');

    selects && selects.forEach(select => {
        selectEvent(select);
    })

    function selectEvent(select) {
        if (select.classList.contains('disabled')) {
            return false;
        }

        const selectHead = select.querySelector('.select-head');
        const selectText = select.querySelector('.select-head-text');
        const selectInput = select.querySelector('.select-input');
        const selectItems = select.querySelectorAll('.select-item > a');

        document.addEventListener('click', function(e) {
            if (!(select == e.target || select.contains(e.target))) {
                select.classList.remove('active');
            }
        })

        selectHead.addEventListener('click', function (e) {
            e.preventDefault();
            select.classList.toggle('active');
        })

        selectItems.forEach(el => {
            el.addEventListener('click', function(e) {
                e.preventDefault();
                selectText.innerText =  el.innerText;
                selectInput.value =  el.innerText;
                select.classList.remove('active');
            })
        })
    }
}

{
    //Parse svg from img
    let svgImgs = document.querySelectorAll('[parse-svg]');

    svgImgs && svgImgs.forEach(el => {
        fetchSvg(el, el.getAttribute('src'));
    })

    function fetchSvg(img, url) {
        const xhr = new XMLHttpRequest();
        xhr.open("GET", url);
        xhr.responseType = "document";
        xhr.send();

        xhr.onload = function() {
            if (xhr.status != 200) {
                console.error(`Ошибка ${xhr.status}: ${xhr.statusText}`);
            } else {
                const res = xhr.responseXML;
                const svg = res.querySelector('svg').outerHTML;
                let span = document.createElement('span');
                span.innerHTML = svg;
                let svgTag = span.querySelector('svg')
                img.after(svgTag);
                img.style.display = 'none';
                span.remove();
            }
        };
    }
}

{
    //accordion 
    const accordionItems = document.querySelectorAll('.product-specification-item');

    accordionItems && accordionItems.forEach(el=> {
        let head = el.querySelector('.product-specification-item-top');
        let content = el.querySelector('.product-specification-item-content');

        accordionAnim(el, head, content);
    })

    function accordionAnim(el, head, content) {
        head.addEventListener('click', function (e) {
            e.preventDefault();
            el.classList.toggle('active');
            if (el.classList.contains('active')) {
                content.style.height = content.scrollHeight + 'px';
            }
            else {
                content.style.height = 0 + 'px';
            }
        })
    }
}

{
    //sticky product-detail
    const productBlock  = document.querySelector('.product ');
    const stickyParentBlock  = document.querySelector('.product-top ');
    const stickyBlock = document.querySelector('.product-nav');

    if (stickyBlock) {
        window.addEventListener('resize', () => {
            let productBlockPosTop = stickyParentBlock.offsetTop;
            stykyBlockProduct(productBlockPosTop);
        })

        let productBlockPosTop = stickyParentBlock.offsetTop;
        stykyBlockProduct(productBlockPosTop);

        function stykyBlockProduct(stickyTop) {
            let scroll = 0;

            window.addEventListener('scroll', function() {
                let top = parseInt(window.scrollY);

                if (window.scrollY >= stickyTop) {
                    stickyBlock.classList.add('active');
                }
                else {
                    stickyBlock.classList.remove('active');
                    stickyBlock.classList.remove('scrollUp');
                }
    
                if (scroll > top) {
                    stickyBlock.classList.add('scrollUp');
                } else if (scroll < top) {
                    stickyBlock.classList.remove('scrollUp');
                }
    
                scroll = top;
            });
        }
    }

    document.querySelectorAll('.product-nav-item > a').forEach(el=>{
        let nameBlock = el.getAttribute('href').split('#')[1];
        let headerHeight = document.querySelector('.header').clientHeight;
        let block = document.querySelector(`#${nameBlock}`);

        el.addEventListener('click', function(e) {
            e.preventDefault();

            window.scrollTo({ 
                top: block.offsetTop - stickyBlock.clientHeight - headerHeight,
                left: 0, 
                behavior: 'smooth' 
            });
        })
    
        window.addEventListener('scroll', function() {
            let screenOfssetTop = headerHeight + this.window.pageYOffset + (this.window.innerHeight / 4);
    
            if (block.offsetTop <= screenOfssetTop) {
                document.querySelectorAll('.product-nav-item > a').forEach(elem=>elem.classList.remove('active'));
                el.classList.add('active');

                if (window.innerWidth <= 992) {
                    stickyBlock.scrollTo({ 
                        top: 0,
                        left: el.offsetLeft, 
                        behavior: 'smooth' 
                    });
                }
            } else {
                el.classList.remove('active');
            }
        })
    })
}

{
    const copyLinks = document.querySelectorAll('.tooltip');

    copyLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();

            link.classList.add('show');
            setTimeout(()=>{link.classList.remove('show');}, 2000);

            let input = document.createElement('input'),
            text = window.location.href;

            document.body.appendChild(input);
            input.value = text;
            input.select();
            document.execCommand('copy');
            document.body.removeChild(input);
        })
    })
    
}

{
    const videos = document.querySelectorAll('video');

    videos.forEach(video => {
        video.controls = false;
    })
}