<script>
  // Sidebar Dropdown
  function toggleDropdown(id){
    const dropdown = document.getElementById(id);
    const icon = document.getElementById(id+'Icon');
    dropdown.classList.toggle('hidden');
    icon.classList.toggle('rotate-180');
  }

  // Profile Dropdown
  const profileBtn = document.getElementById('profileBtn');
  const profileMenu = document.getElementById('profileMenu');

  profileBtn.addEventListener('click', () => {
    profileMenu.classList.toggle('hidden');
  });

  document.addEventListener('click', (e) => {
    if (!profileBtn.contains(e.target) && !profileMenu.contains(e.target)) {
      profileMenu.classList.add('hidden');
    }
  });

  // Dark Mode
  const themeToggle = document.getElementById('themeToggle');
  themeToggle.addEventListener('click', () => {
    document.documentElement.classList.toggle('dark');
    localStorage.setItem('theme', document.documentElement.classList.contains('dark')?'dark':'light');
  });

  if(localStorage.getItem('theme')==='dark'){
    document.documentElement.classList.add('dark');
  }
</script>
