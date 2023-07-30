// DARKMODE
const darkModeToggle = document.querySelector(".switch input");
const body = document.body;
const isDarkMode = localStorage.getItem("darkMode");

// Kiểm tra xem Dark Mode đã được bật hay chưa và cập nhật giao diện
if (isDarkMode === "enabled") {
    body.classList.add("dark-mode");
    darkModeToggle.checked = true;
}


darkModeToggle.addEventListener("click", () => {
    if (darkModeToggle.checked) {
        // Nếu Dark Mode chưa được bật, bật nó
        body.classList.add("dark-mode");
        localStorage.setItem("darkMode", "enabled");
    } else {
        // Nếu Dark Mode đã được bật, tắt nó
        body.classList.remove("dark-mode");
        localStorage.setItem("darkMode", "disabled");
    }
});

// CÁC SẢN PHẨM NỔI BẬT
function showImageModal(img) {
    var expandedImg = document.getElementById("expandedImg");
    var imgText = document.getElementById("imgtext");
    expandedImg.src = img.src;
    imgText.innerHTML = img.alt;

    var container = document.getElementById("imageModalContainer");
    container.classList.add("fade-in");
    container.style.display = "block";
}

function closeImageModal() {
    var container = document.getElementById("imageModalContainer");
    container.classList.remove("fade-in");
    container.classList.add("fade-out");
    setTimeout(function () {
        container.style.display = "none";
        container.classList.remove("fade-out");
    }, 300);
}

// Kiểm tra và hiển thị trạng thái của container khi tải lại trang
document.addEventListener("DOMContentLoaded", function () {
    var container = document.getElementById("imageModalContainer");
    var isModalVisible = localStorage.getItem("imageModalVisible");

    if (isModalVisible === "true") {
        container.style.display = "block";
    }
});

// Lưu trạng thái của container khi đóng
window.addEventListener("beforeunload", function () {
    var container = document.getElementById("imageModalContainer");
    var isModalVisible = window.getComputedStyle(container).display;

    localStorage.setItem("imageModalVisible", isModalVisible);
});

// XỬ LÍ FORM KHI NGƯỜI DÙNG GỬI LÊN
document;
document
    .getElementById("contact-form")
    .addEventListener("submit", function (event) {
        event.preventDefault();

        const formData = new FormData(this);
        fetch(this.action, {
            method: "POST",
            body: formData,
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
            },
        })
            .then((response) => response.json())
            .then((data) => {
                const statusNotification = document.getElementById(
                    "status-notification"
                );
                statusNotification.innerText = data.message;
                statusNotification.className = "show " + data.status; // Update the class name

                // Remove the notification after a few seconds
                setTimeout(() => {
                    statusNotification.classList.remove("show");
                }, 5000); // Show the notification for 5 seconds
            })
            .catch((error) => {
                console.error(error);
                const statusNotification = document.getElementById(
                    "status-notification"
                );
                statusNotification.innerText =
                    "Biểu mẫu gửi không thành công. Vui lòng kiểm tra lại";
                statusNotification.className = "show error"; // Update the class name

                // Remove the notification after a few seconds
                setTimeout(() => {
                    statusNotification.classList.remove("show");
                }, 5000); // Show the notification for 5 seconds
            });
    });



// Hiển thị thông báo thành công hoặc lỗi sau 1 giây
$(document).ready(function () {
    $(".alert").delay(2000).fadeIn(400);

    // Tự động biến mất thông báo sau thời gian được cập nhật
    $(".alert").delay(showDuration).fadeOut(3000);
});

// Ẩn thông báo khi bấm nút đóng
function hideNotification(btn) {
    const notification = $(btn).closest(".notification-container");
    notification.addClass("animate__animated animate__fadeOutRight");
    setTimeout(() => {
        notification.remove();
    }, 2500);
}

// <!-- Đoạn JS để lấy thông tin sản phẩm khi ấn vào nút MUA -->
function showProductModal(image, name, price, description) {
    document.getElementById("productImage").src = image;
    document.getElementById("productName").innerText = name;
    document.getElementById("productPrice").innerText = price;
    document.getElementById("productDescription").innerText = description;
    document.getElementById("ticketModal").style.display = "block";
}

function hideProductModal() {
    document.getElementById("ticketModal").style.display = "none";
}
