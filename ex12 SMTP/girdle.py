# Simple Mail Transfer Protocol
import	smtplib

# Multipurpose Internet Mail Extensions.
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText
# MIME helps standardizing the format of e-mail messages.

# Starting the SMTP server:
host = ""
port = ""
login = ""
password = ""
