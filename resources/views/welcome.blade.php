<x-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #f3f4f6; /* Light gray background */
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            overflow: hidden;
            margin: 0;
        }

        .form-container {
            background: #ffffff; /* White form background */
            backdrop-filter: blur(8px);
            padding: 2.5rem;
            border-radius: 0.75rem;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 400px;
            transform: perspective(1000px) rotateY(0deg) rotateX(0deg);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            position: relative;
            z-index: 10;
        }

        .form-container:hover {
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }

        .input-field {
            transition: all 0.3s ease-in-out;
            border: 1px solid #d1d5db; /* Light gray border */
            border-radius: 0.5rem;
            padding: 0.75rem 1rem;
            width: 100%;
            background: #f9fafb; /* Light gray input background */
            outline: none;
        }

        .input-field:focus {
            border-color: #6b7280; /* Medium gray for focus */
            box-shadow: 0 0 0 3px rgba(107, 114, 128, 0.3); /* Gray focus ring */
            background: #ffffff;
        }

        .btn-3d {
            background: #6b7280; /* Medium gray button */
            color: #ffffff;
            font-weight: 500;
            padding: 0.75rem 1rem;
            border-radius: 0.5rem;
            border: none;
            width: 100%;
            transition: all 0.3s ease-in-out;
            cursor: pointer;
        }

        .btn-3d:hover {
            background: #4b5563; /* Darker gray on hover */
            transform: translateY(-2px);
            box-shadow: 0 5px 12px rgba(0, 0, 0, 0.2);
        }

        .avatar {
            position: absolute;
            top: -40px;
            left: 20px;
            width: 50px;
            height: 50px;
            background: #ffffff;
            border-radius: 50%;
            border: 2px solid #6b7280; /* Gray border */
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }

        .avatar-face {
            width: 30px;
            height: 30px;
            position: relative;
        }

        .eye {
            position: absolute;
            width: 10px;
            height: 10px;
            background: #ffffff;
            border-radius: 50%;
            border: 1px solid #1f2937; /* Dark gray for eyes */
            top: 8px;
            overflow: hidden;
        }

        .eye-left {
            left: 6px;
        }

        .eye-right {
            right: 6px;
        }

        .pupil {
            position: absolute;
            width: 5px;
            height: 5px;
            background: #1f2937; /* Dark gray pupils */
            border-radius: 50%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            transition: transform 0.2s ease-in-out;
        }

        .error-message {
            color: #374151; /* Dark gray for errors */
            font-size: 0.875rem;
            margin-top: 0.25rem;
            display: none;
        }

        .input-field.error {
            border-color: #374151; /* Dark gray for error state */
            box-shadow: 0 0 0 3px rgba(55, 65, 81, 0.3);
        }

        a {
            color: #1f2937; /* Dark black for links */
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <x-toast />
    <div class="form-container" id="formCard">
        <!-- Comment out the avatar div below to remove it entirely -->
        <div class="avatar">
            <div class="avatar-face">
                <div class="eye eye-left">
                    <div class="pupil" id="pupilLeft"></div>
                </div>
                <div class="eye eye-right">
                    <div class="pupil" id="pupilRight"></div>
                </div>
            </div>
        </div>
        <h2 class="text-2xl font-semibold text-gray-800 text-center mb-6">Sign In</h2>
        <form method="POST" action="/user/login" class="space-y-4" id="loginForm">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                <input type="email" id="email" name="email" required
                    class="input-field mt-1"
                    placeholder="Enter your email">
                <div class="error-message" id="emailError">Please enter a valid email address.</div>
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" required
                    class="input-field mt-1"
                    placeholder="Enter your password">
                <div class="error-message" id="passwordError">Password must be at least 8 characters long.</div>
            </div>
            <div>
                <button type="submit" class="btn-3d">Sign In</button>
            </div>
        </form>
        <p class="text-sm text-gray-600 text-center mt-4">
            Forgot your Password? <a href="/register">Reset it...!</a>
        </p>
    </div>
    <script>
        // Mouse-driven card tilt (minimal effect)
        const formCard = document.getElementById('formCard');
        document.addEventListener('mousemove', (e) => {
            const rect = formCard.getBoundingClientRect();
            const centerX = rect.left + rect.width / 2;
            const centerY = rect.top + rect.height / 2;
            const maxTilt = 5; // Further reduced tilt for minimalism
            const mouseX = e.clientX;
            const mouseY = e.clientY;
            const rotateY = ((mouseX - centerX) / (window.innerWidth / 2)) * maxTilt;
            const rotateX = -((mouseY - centerY) / (window.innerHeight / 2)) * maxTilt;
            formCard.style.transform = perspective(1000px) rotateY(${rotateY}deg) rotateX(${rotateX}deg);
        });

        // Keyboard-driven eye movement
        const pupilLeft = document.getElementById('pupilLeft');
        const pupilRight = document.getElementById('pupilRight');
        document.addEventListener('keydown', (e) => {
            let xOffset = 0, yOffset = 0;
            const moveDistance = 2; // Minimal movement
            switch (e.key.toLowerCase()) {
                case 'arrowup':
                case 'w':
                    yOffset = -moveDistance;
                    break;
                case 'arrowdown':
                case 's':
                    yOffset = moveDistance;
                    break;
                case 'arrowleft':
                case 'a':
                    xOffset = -moveDistance;
                    break;
                case 'arrowright':
                case 'd':
                    xOffset = moveDistance;
                    break;
            }
            pupilLeft.style.transform = translate(${xOffset - 50}%, ${yOffset - 50}%);
            pupilRight.style.transform = translate(${xOffset - 50}%, ${yOffset - 50}%);
        });

        // Client-side validation
        const loginForm = document.getElementById('loginForm');
        const emailInput = document.getElementById('email');
        const passwordInput = document.getElementById('password');
        const emailError = document.getElementById('emailError');
        const passwordError = document.getElementById('passwordError');

        loginForm.addEventListener('submit', (e) => {
            let valid = true;
            emailError.style.display = 'none';
            passwordError.style.display = 'none';
            emailInput.classList.remove('error');
            passwordInput.classList.remove('error');

            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(emailInput.value)) {
                emailError.style.display = 'block';
                emailInput.classList.add('error');
                valid = false;
            }

            if (passwordInput.value.length < 8) {
                passwordError.style.display = 'block';
                passwordInput.classList.add('error');
                valid = false;
            }

            if (!valid) {
                e.preventDefault();
            }
        });
    </script>
</body>

</html>
</x-layout>