"use strict"
//==========================================

// Табы
const tabs = () => {

    function bindTabs(titleClass, contentClass, activeClass, startTitleClass, startContentClass) {

        const title = document.querySelectorAll(titleClass);
        const content = document.querySelectorAll(contentClass);
        const startTitle = document.querySelector(startTitleClass);
        const startContent = document.querySelector(startContentClass);

       
        title.forEach((item, index) => {
            item.addEventListener('keydown', event => {
                if (event.key === 'ArrowLeft') {
                    const prevIndex = (index - 1 + title.length) % title.length;
                    title[prevIndex].focus();
                    event.preventDefault();
                } else if (event.key === 'ArrowRight') {
                    const nextIndex = (index + 1) % title.length;
                    title[nextIndex].focus();
                    event.preventDefault();
                } 
            });
        });


        title.forEach(item => item.addEventListener('click', () => {
            if (item.classList.contains(activeClass)) {
                return;
            }
        
            title.forEach(element => {
                element.classList.remove(activeClass);
            });

            item.classList.add(activeClass);

            content.forEach(element => {
                element.classList.remove(activeClass);
            });
        
            const activeContent = document.querySelector('#' + item.dataset.tab);
            activeContent.classList.add(activeClass);
        }));

        startTitle.classList.add(activeClass);
        startContent.classList.add(activeClass);
    }


    bindTabs('.title', '.content', 'active', '[data-tab="tab-1"]', '#tab-1');
}
