const projectItems = document.querySelectorAll('.projects .inner .items .item');
projectItems.forEach(item =>{
    item.addEventListener('mouseover', () =>{
        item.style.transform = 'scale(1.05)';
        item.style.transition = 'transform 0.3s ease';
    });

    item.addEventListener('mouseout', () =>{
        item.style.transform = 'scale(1)';
        item.style.transition = 'transform 0.3s ease';
    });
});

const SceduleaCallBtn = document.getElementById('SceduleaCallBtn');
SceduleaCallBtn.addEventListener('click', () =>{
    window.location.href = 'ctc.php';
});

const AboutItem = document.querySelectorAll('.about .items .item .inner');
AboutItem.forEach(inner =>{
    inner.addEventListener('mouseover', () =>{
        inner.style.transform = 'scale(1.05)';
        inner.style.transition = 'transform 0.3s ease';
        
    });

    inner.addEventListener('mouseout', () =>{
        inner.style.transform = 'scale(1)';
        inner.style.transition = 'transform 0.3s ease';
    });
})

const logo = document.querySelector('.icons');
logo.forEach(icons =>{
    icons.addEventListener('mouseover', () =>{
        icons.style.transform = 'scale(1.05)';
        icons.style.transition = 'transform 0.3s ease';
        
    });

    icons.addEventListener('mouseout', () =>{
        icons.style.transform = 'scale(1)';
        icons.style.transition = 'transform 0.3s ease';
    });
    })


