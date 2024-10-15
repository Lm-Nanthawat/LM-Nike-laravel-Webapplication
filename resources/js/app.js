function toggleAccordion() {
    if (window.innerWidth <= 768) { // ใช้ 768px เป็นตัวอย่างสำหรับขนาดหน้าจอใหญ่
        const content = document.getElementById('accordion-content');
        content.classList.toggle('hidden');
    }
}

window.toggleAccordion = toggleAccordion;

function toggleAccordion2() {
    if (window.innerWidth <= 768) {
        const content = document.getElementById('accordion-content2');
        content.classList.toggle('hidden');
    }
}

window.toggleAccordion2 = toggleAccordion2;

function toggleAccordion3() {
    if (window.innerWidth <= 768) {
        const content = document.getElementById('accordion-content3');
        content.classList.toggle('hidden');
    }
}

window.toggleAccordion3 = toggleAccordion3;

function toggleAccordion4() {
    if (window.innerWidth <= 768) {
        const content = document.getElementById('accordion-content4');
        content.classList.toggle('hidden');
    }
}

window.toggleAccordion4 = toggleAccordion4;

