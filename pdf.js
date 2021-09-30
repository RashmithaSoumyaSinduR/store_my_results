window.onload = function () {
    document.getElementById("pdf")
        .addEventListener("click", () => {
            const invoice = this.document.getElementById("download");
            console.log(invoice);
            console.log(window);
            var opt = {
                margin: 1,
                filename: 'markssheet.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
            };
            html2pdf().from(invoice).set(opt).save();
        })
} 