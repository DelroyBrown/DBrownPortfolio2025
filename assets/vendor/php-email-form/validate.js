(function () {
  const form = document.getElementById('contact-form');
  if (!form) return;

  const loading = form.querySelector('.loading');
  const errorEl = form.querySelector('.error-message');
  const sentEl = form.querySelector('.sent-message');
  const btn = form.querySelector('button[type="submit"]');

  function show(el) { el && (el.style.display = 'block'); }
  function hide(el) { el && (el.style.display = 'none'); }
  function text(el, t) { if (el) el.textContent = t; }

  hide(loading); hide(errorEl); hide(sentEl);

  form.addEventListener('submit', async (e) => {
    e.preventDefault();
    hide(errorEl); hide(sentEl);
    show(loading);
    if (btn) btn.disabled = true;

    try {
      const res = await fetch(form.getAttribute('action') || 'forms/contact.php', {
        method: 'POST',
        body: new FormData(form),
        headers: { 'X-Requested-With': 'XMLHttpRequest' }
      });

      const data = await res.json().catch(() => ({}));
      if (!res.ok || !data.ok) {
        throw new Error(data.error || `HTTP ${res.status}`);
      }

      hide(loading);
      show(sentEl);
      form.reset();
    } catch (err) {
      hide(loading);
      text(errorEl, 'Could not send message: ' + err.message);
      show(errorEl);
    } finally {
      if (btn) btn.disabled = false;
    }
  });
})();