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

// document.addEventListener("scroll", function() {
//     const wallHeader = document.getElementById("wall-header");
//     const sidebar = document.getElementById("sidebar");
//     const scrollPosition = window.scrollY; // ตำแหน่งการเลื่อน

//     // ตรวจสอบว่าตำแหน่งการเลื่อนมากกว่า 11vh หรือไม่
//     if (scrollPosition >= window.innerHeight * 0.11) {
//         wallHeader.classList.add("fixed", "top-0"); // เพิ่ม class fixed และ top-0
//         sidebar.classList.add("fixed", "top-[11vh]"); // เพิ่ม class fixed และ top-[11vh]
//     } else {
//         wallHeader.classList.remove("fixed", "top-0"); // ลบ class fixed และ top-0
//         sidebar.classList.remove("fixed", "top-[11vh]"); // ลบ class fixed และ top-[11vh]
//     }
// });


