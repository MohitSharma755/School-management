
  function togglePassword() {
    const passwordField = document.getElementById('password');
    const passwordToggle = document.querySelector('.toggle-password span');
    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        passwordToggle.textContent = '🙈'; // Change icon to indicate password is visible
    } else {
        passwordField.type = 'password';
        passwordToggle.textContent = '👁️'; // Change icon to indicate password is hidden
    }
}


function confirmDelete(id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "This book will be permanently deleted!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('delete-form-' + id).submit();
        }
    })
}

function toggleSidebar() {
 document.getElementById('sidebar-toggle').addEventListener('click', function () {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('show-sidebar');
        });
    }

    function generateBio() {
        // alert("i am working")
        // // Sidebar toggle functionality
        // document.getElementById('sidebar-toggle').addEventListener('click', function () {
        //     const sidebar = document.getElementById('sidebar');
        //     sidebar.classList.toggle('show-sidebar');
        // });

        // Gemini API integration for generating student bio
        document.addEventListener('DOMContentLoaded', function () {
            const bioModal = new bootstrap.Modal(document.getElementById('bioModal'));
            const bioText = document.getElementById('bioText');

            document.querySelectorAll('.generate-bio-btn').forEach(button => {
                button.addEventListener('click', async function () {
                    const name = this.getAttribute('data-name');
                    const course = this.getAttribute('data-course');

                    // Show the modal with a loading message
                    bioText.innerHTML = 'Generating a professional bio, please wait...';
                    bioModal.show();

                    try {
                        const prompt = `Write a brief, professional bio for a university student named ${name} who is studying ${course}. The bio should be suitable for a student directory and highlight their academic focus.`;

                        let chatHistory = [];
                        chatHistory.push({ role: "user", parts: [{ text: prompt }] });
                        const payload = { contents: chatHistory };
                        const apiKey = "";
                        const apiUrl = `https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash-preview-05-20:generateContent?key=${apiKey}`;
                        const response = await fetch(apiUrl, {
                            method: 'POST',
                            headers: { 'Content-Type': 'application/json' },
                            body: JSON.stringify(payload)
                        });

                        const result = await response.json();
                        if (result.candidates && result.candidates.length > 0 &&
                            result.candidates[0].content && result.candidates[0].content.parts &&
                            result.candidates[0].content.parts.length > 0) {
                            const text = result.candidates[0].content.parts[0].text;
                            bioText.innerHTML = text;
                        } else {
                            bioText.innerHTML = 'Failed to generate bio. Please try again.';
                            console.error('API response structure is unexpected:', result);
                        }
                    } catch (error) {
                        bioText.innerHTML = 'An error occurred while generating the bio.';
                        console.error('API call error:', error);
                    }
                });
            });
        });
    }
