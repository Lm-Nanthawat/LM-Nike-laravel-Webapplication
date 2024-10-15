import './bootstrap';

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */





// resources/js/women.js

export function toggleAccordion() {
    const content = document.getElementById('accordion-content');
    content.classList.toggle('hidden');
}

// ทำให้ฟังก์ชันนี้เข้าถึงได้จาก global scope
window.toggleAccordion = toggleAccordion;
