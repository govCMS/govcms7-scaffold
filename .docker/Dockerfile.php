ARG CLI_IMAGE
FROM ${CLI_IMAGE} as cli

FROM govcmsdev/php-saas

COPY --from=cli /app /app
