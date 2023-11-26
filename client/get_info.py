import psutil
from platform import uname



system_info = {
'comp_name': uname().node,
'os_name': f"{uname().system} {uname().release}",
'version': uname().version,
'machine': uname().machine}
processor = {'name': uname().processor,
              'phisycal_core': psutil.cpu_count(logical=False),
              'all_core': psutil.cpu_count(logical=True),
              'freq_max': psutil.cpu_freq().max}
memory = {  'volume': (psutil.virtual_memory().total),
            'avaiable': (psutil.virtual_memory().available),
            'used': (psutil.virtual_memory().used),
            'filled': (psutil.virtual_memory().used)/(psutil.virtual_memory().total)*10000//1/100}

def get_summary():
    sum = {
    'comp_name': uname().node,
    'os_name': f"{uname().system} {uname().release}",
    'version': uname().version,
    'machine': uname().machine,
    'name': uname().processor,
    'phisycal_core': psutil.cpu_count(logical=False),
    'all_core': psutil.cpu_count(logical=True),
    'freq_max': psutil.cpu_freq().max,
    'volume': (psutil.virtual_memory().total),
    'avaiable': (psutil.virtual_memory().available),
        'used': (psutil.virtual_memory().used),
    'filled': (psutil.virtual_memory().used)/(psutil.virtual_memory().total)*10000//1/100
    }
    return sum


print(sum)