FROM internetsystemsconsortium/bind9:9.18

COPY config/named.conf /etc/bind/named.conf

COPY zones/l1-4.ephec-ti.be.zone /var/cache/bind/l1-4.ephec-ti.be.zone

RUN chown -R bind:bind /etc/bind/ && \
    chown bind:bind /var/cache/bind/l1-4.ephec-ti.be.zone

ENTRYPOINT ["/usr/sbin/named", "-g", "-c", "/etc/bind/named.conf", "-u", "bind"]
