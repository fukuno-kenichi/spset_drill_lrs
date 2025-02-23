
SECRET_KEY='****'
SUPERSET_CONFIG_PATH='/home/ubuntu/superset_config.py'
SQLALCHEMY_DATABASE_URI = 'sqlite:////home/ubuntu/.superset/superset.db'

PUBLIC_ROLE_LIKE_GAMMA = True
PUBLIC_ROLE_LIKE = "Gamma"

CONTENT_SECURITY_POLICY = {
        'default-src': ['self', 'gsis-fukuno.com:8088'],
  # Add other directives as needed
}

ENABLE_JAVASCRIPT_CONTROLS = True

TALISMAN_ENABLED = False
ENABLE_CORS = True 
#OVERRIDE_HTTP_HEADERS = {'X-Frame-Options':'ALLOWALL'}
OVERRIDE_HTTP_HEADERS = { "Content-Security-Policy": "frame-ancestors https://gsis-fukuno.com;" }

#HTTP_HEADERS = {"X-Frame-Options":"ALLOWALL"}

SUPERSET_FEATURE_EMBEDDED_SUPERSET=True

