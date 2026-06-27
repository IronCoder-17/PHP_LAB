// Password toggle
const eyeBtn = document.getElementById('eyeBtn');
const pwInput = document.getElementById('password');
const eyeIcon = document.getElementById('eyeIcon');
eyeBtn.addEventListener('click', () => {
  const hidden = pwInput.type === 'password';
  pwInput.type = hidden ? 'text' : 'password';
  eyeIcon.className = hidden ? 'ti ti-eye-off' : 'ti ti-eye';
});

// Toast helper
const toast = document.getElementById('toast');
let toastTimer;
function showToast(msg, type = 'success') {
  toast.textContent = '';
  toast.className = type;
  const icon = document.createElement('i');
  icon.className = type === 'success' ? 'ti ti-check' : 'ti ti-alert-circle';
  toast.appendChild(icon);
  toast.appendChild(document.createTextNode(' ' + msg));
  toast.classList.add('show');
  clearTimeout(toastTimer);
  toastTimer = setTimeout(() => toast.classList.remove('show'), 3000);
}

// Login
document.getElementById('loginBtn').addEventListener('click', () => {
  const email = document.getElementById('email').value.trim();
  const pw = document.getElementById('password').value;
  if (!email) return showToast('Please enter your email address.', 'error');
  if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) return showToast('Please enter a valid email.', 'error');
  if (!pw) return showToast('Please enter your password.', 'error');
  if (pw.length < 6) return showToast('Password must be at least 6 characters.', 'error');
  showToast('Welcome back to NatureFlow!', 'success');
});

// Hamburger
const hamburger = document.getElementById('hamburger');
const mobileMenu = document.getElementById('mobileMenu');
let menuOpen = false;
hamburger.addEventListener('click', () => {
  menuOpen = !menuOpen;
  mobileMenu.classList.toggle('open', menuOpen);
  hamburger.querySelector('i').className = menuOpen ? 'ti ti-x' : 'ti ti-menu-2';
});
