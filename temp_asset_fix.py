import re
from pathlib import Path
files = [
    Path(r"d:\XAMPP\htdocs\gym\resources\views\frontend\contact.blade.php"),
    Path(r"d:\XAMPP\htdocs\gym\resources\views\frontend\service.blade.php"),
    Path(r"d:\XAMPP\htdocs\gym\resources\views\frontend\trainer.blade.php"),
    Path(r"d:\XAMPP\htdocs\gym\resources\views\frontend\membership.blade.php"),
]
attr_re = re.compile(r'\b(href|src)="((?:website|global|uploads)/[^"\n]+)"')
url_re = re.compile(r'url\(["\']?((?:website|global|uploads)/[^"\')]+)["\']?\)')
for path in files:
    text = path.read_text(encoding='utf-8')
    new_text = attr_re.sub(lambda m: f'{m.group(1)}="{{{{ asset(\'{m.group(2)}\') }}}}"', text)
    new_text = url_re.sub(lambda m: f'url({{{{ asset(\'{m.group(1)}\') }}}})', new_text)
    if new_text != text:
        path.write_text(new_text, encoding='utf-8')
        print('Updated', path)
